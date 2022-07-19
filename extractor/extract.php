#!/usr/bin/env php
<?php declare(strict_types = 1);

use PhpParser\Comment;
use PhpParser\Node;
use PhpParser\ParserFactory;
use PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocChildNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\ReturnTagValueNode;
use PHPStan\PhpDocParser\Lexer\Lexer;
use PHPStan\PhpDocParser\Parser\PhpDocParser;
use PHPStan\PhpDocParser\Parser\TokenIterator;
use PHPStan\PhpDocParser\Parser\ConstExprParser;
use PHPStan\PhpDocParser\Parser\TypeParser;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;

require_once __DIR__ . '/vendor/autoload.php';

$parser = (new ParserFactory)->create(ParserFactory::ONLY_PHP7);

$command = new class(
	$parser,
	new \PhpParser\PrettyPrinter\Standard()
) extends Command {

	/** @var \PhpParser\Parser */
	private $parser;

	/** @var \PhpParser\PrettyPrinter\Standard */
	private $printer;

	/** @var Lexer */
	private $phpDocLexer;

	/** @var PhpDocParser */
	private $phpDocParser;

	public function __construct(
		\PhpParser\Parser $parser,
		\PhpParser\PrettyPrinter\Standard $printer
	)
	{
		parent::__construct();
		$this->parser = $parser;
		$this->printer = $printer;
		$this->phpDocLexer = new Lexer();

		$constExprParser = new ConstExprParser();
		$typeParser = new TypeParser($constExprParser);
		$this->phpDocParser = new PhpDocParser($typeParser, $constExprParser);
	}

	protected function configure(): void
	{
		$this->setName('extract');
		$this->addOption('update', null, InputOption::VALUE_NONE);
		$this->addArgument('updateTo', InputArgument::OPTIONAL);
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$isUpdate = $input->getOption('update');
		$ourStubsDir = realpath(__DIR__ . '/../stubs');
		if ($ourStubsDir === false) {
			throw new \LogicException('Invalid stubs path');
		}

		$updateTo = $input->getArgument('updateTo');
		if (!$isUpdate) {
			$this->clearOldStubs($ourStubsDir);
		} else {
			if ($updateTo === null) {
				throw new \LogicException('Missing arguments');
			}
		}
		$srcDir = realpath(__DIR__ . '/../php-src');
		if ($srcDir === false) {
			throw new \LogicException('Invalid php-src path');
		}
		$finder = new Finder();
		$finder->files()->in($srcDir)->name('*.stub.php')
			->exclude('ext/skeleton');

		$addClasses = [];
		$addFunctions = [];
		foreach ($finder as $file) {
			$stubPath = $file->getRealPath();
			[$tmpClasses, $tmpFunctions] = $this->extractStub($stubPath, $file->getRelativePathname(), $isUpdate, $updateTo);
			foreach ($tmpClasses as $className => $fileName) {
				$addClasses[$className] = $fileName;
			}
			foreach ($tmpFunctions as $functionName => $fileName) {
				$addFunctions[$functionName] = $fileName;
			}
		}

		if (!$isUpdate) {
			$classes = $addClasses;
			$functions = $addFunctions;
			$addClasses = [];
			$addFunctions = [];
		} else {
			require_once __DIR__ . '/../Php8StubsMap.php';
			$map = new \PHPStan\Php8StubsMap(80000); // todo "from" argument when updating from 8.1 to 8.2 for example
			$classes = $map->classes;
			$functions = $map->functions;
			foreach ($addClasses as $className => $fileName) {
				if (!array_key_exists($className, $classes)) {
					continue;
				}

				if ($classes[$className] !== $fileName) {
					throw new \LogicException(sprintf('File name of class %s changed from %s to %s.', $className, $classes[$className], $fileName));
				}

				unset($addClasses[$className]);
			}
			foreach ($addFunctions as $functionName => $fileName) {
				if (!array_key_exists($functionName, $functions)) {
					continue;
				}

				if ($functions[$functionName] !== $fileName) {
					throw new \LogicException(sprintf('File name of function %s changed from %s to %s.', $functionName, $functions[$functionName], $fileName));
				}

				unset($addFunctions[$functionName]);
			}
		}

		// todo are there symbols missing at their original locations?

		ksort($classes);
		ksort($functions);
		$this->dumpMap($classes, $functions, $updateTo, $addClasses, $addFunctions);

		return 0;
	}

	private function clearOldStubs(string $ourStubsDir): void
	{
		$iterator = new RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($ourStubsDir, \FilesystemIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::CHILD_FIRST
		);
		foreach ($iterator as $filename => $fileInfo) {
			if (pathinfo($filename, PATHINFO_BASENAME) === 'LICENSE') {
				continue;
			}

			if ($fileInfo->isDir()) {
				rmdir($filename);
			} else {
				unlink($filename);
			}
		}
	}

	/**
	 * @param string $stubPath
	 * @param string $relativeStubPath
	 * @return array{array<string, string>, array<string, string>}
	 */
	private function extractStub(string $stubPath, string $relativeStubPath, bool $isUpdate, ?string $updateTo): array
	{
		$nameResolver = new PhpParser\NodeVisitor\NameResolver;
		$nodeTraverser = new PhpParser\NodeTraverser;
		$nodeTraverser->addVisitor($nameResolver);

		$visitor = new class($stubPath) extends \PhpParser\NodeVisitorAbstract {

			private string $stubPath;

			/** @var PhpParser\Node\Stmt[] */
			private array $stmts;

			public function __construct(string $stubPath)
			{
				$this->stubPath = $stubPath;
			}

			public function enterNode(Node $node)
			{
				if ($node instanceof Node\Stmt\Namespace_) {
					// pass
				} elseif ($node instanceof Node\Stmt\Class_) {
					$this->stmts[] = $node;
					return \PhpParser\NodeTraverser::DONT_TRAVERSE_CHILDREN;
				} elseif ($node instanceof Node\Stmt\Enum_) {
					$this->stmts[] = $node;
					return \PhpParser\NodeTraverser::DONT_TRAVERSE_CHILDREN;
				} elseif ($node instanceof Node\Stmt\Interface_) {
					$this->stmts[] = $node;
					return \PhpParser\NodeTraverser::DONT_TRAVERSE_CHILDREN;
				} elseif ($node instanceof Node\Stmt\Function_) {
					$this->stmts[] = $node;
					return \PhpParser\NodeTraverser::DONT_TRAVERSE_CHILDREN;
				} elseif ($node instanceof Node\Stmt\Trait_) {
					$this->stmts[] = $node;
					return \PhpParser\NodeTraverser::DONT_TRAVERSE_CHILDREN;
				} elseif ($node instanceof Node\Stmt\Nop) {
					// pass
				} elseif ($node instanceof Node\Name) {
					// pass
				} else {
					throw new \Exception(sprintf('Unhandled node type %s in %s on line %s.', get_class($node), $this->stubPath, $node->getLine()));
				}

				return null;
			}

			/**
			 * @return Node\Stmt[]
			 */
			public function getStmts(): array
			{
				return $this->stmts;
			}

			public function clear(): void
			{
				$this->stmts = [];
			}
		};

		$nodeTraverser->addVisitor($visitor);

		$stubContents = file_get_contents($stubPath);
		if ($stubContents === false) {
			throw new \LogicException('Could not read stub');
		}
		$ast = $this->parser->parse($stubContents);
		if ($ast === null) {
			throw new \LogicException('AST cannot be null');
		}
		$nodeTraverser->traverse($ast);

		$stmts = $visitor->getStmts();
		$classes = [];
		$functions = [];
		foreach ($stmts as $stmt) {
			if (!$stmt instanceof Node\Stmt\Class_ && !$stmt instanceof Node\Stmt\Interface_ && !$stmt instanceof Node\Stmt\Trait_ && !$stmt instanceof Node\Stmt\Enum_ && !$stmt instanceof Node\Stmt\Function_) {
				throw new \Exception(sprintf('Unhandled node type %s in %s on line %s.', get_class($stmt), $stubPath, $stmt->getLine()));
			}
			$namespacedName = $stmt->namespacedName->toString();
			$pathPart = 'stubs/' . dirname($relativeStubPath) . '/' . str_replace('\\', '/', $namespacedName) . '.php';
			$targetStubPath = __DIR__ . '/../' . $pathPart;

			if ($stmt instanceof Node\Stmt\Class_ || $stmt instanceof Node\Stmt\Interface_ || $stmt instanceof Node\Stmt\Trait_) {
				if (array_key_exists(strtolower($namespacedName), $classes)) {
					continue;
				}
				$classes[strtolower($namespacedName)] = $pathPart;
				$stmt = $this->filterClassPhpDocs($stmt);
			} else {
				if (array_key_exists(strtolower($namespacedName), $functions)) {
					continue;
				}
				$functions[strtolower($namespacedName)] = $pathPart;
			}

			$originalStmt = $stmt;
			if (strpos($namespacedName, '\\') !== false) {
				$stmt = new Node\Stmt\Namespace_($stmt->namespacedName->slice(0, -1), [$stmt]);
			}

			@mkdir(dirname($targetStubPath), 0777, true);

			if (!$isUpdate) {
				if (is_file($targetStubPath)) {
					continue;
				}
				file_put_contents($targetStubPath, "<?php \n\n" . $this->printer->prettyPrint([$stmt]));
				continue;
			}

			if (!is_file($targetStubPath)) {
				$originalStmt->attrGroups[] = new Node\AttributeGroup([
					new Node\Attribute(
						new Node\Name\FullyQualified('Since'),
						[new Node\Arg(new Node\Scalar\String_($updateTo))],
					),
				]);
				file_put_contents($targetStubPath, "<?php \n\n" . $this->printer->prettyPrint([$stmt]));
				continue;
			}

			$oldStubContents = file_get_contents($targetStubPath);
			if ($oldStubContents === false) {
				throw new \LogicException('Could not read old stub');
			}
			$oldStubAst = $this->parser->parse($oldStubContents);
			if ($oldStubAst === null) {
				throw new \LogicException('Old stub AST cannot be null');
			}
			$visitor->clear();
			$nodeTraverser->traverse($oldStubAst);

			$oldStmts = $visitor->getStmts();
			if (count($oldStmts) !== 1) {
				throw new \LogicException('There is supposed to be one statement in the old AST: ' . $targetStubPath);
			}

			$oldStmt = $oldStmts[0];
			if (!$oldStmt instanceof Node\Stmt\Class_ && !$oldStmt instanceof Node\Stmt\Interface_ && !$oldStmt instanceof Node\Stmt\Trait_ && !$oldStmt instanceof Node\Stmt\Enum_ && !$oldStmt instanceof Node\Stmt\Function_) {
				throw new \Exception(sprintf('Unhandled node type %s in %s on line %s.', get_class($stmt), $stubPath, $stmt->getLine()));
			}
			$oldNamespacedName = $oldStmt->namespacedName->toString();
			if (strpos($oldNamespacedName, '\\') !== false) {
				$oldStmt = new Node\Stmt\Namespace_($oldStmt->namespacedName->slice(0, -1), [$oldStmt]);
			}

			$newStmts = $this->compareStatements($oldStmt, $stmt, $updateTo);
			file_put_contents($targetStubPath, "<?php \n\n" . $this->printer->prettyPrint($newStmts));
		}

		return [$classes, $functions];
	}

	/** @return Node\Stmt[] */
	private function compareStatements(Node\Stmt $old, Node\Stmt $new, string $updateTo): array
	{
		if ($old instanceof Node\Stmt\Namespace_ && $new instanceof Node\Stmt\Namespace_) {
			if ($old->name->toString() !== $new->name->toString()) {
				throw new \LogicException('Namespace name changed');
			}

			return [new Node\Stmt\Namespace_($old->name, $this->compareStatementsInNamespace($old->stmts, $new->stmts, $updateTo))];
		} elseif (!$old instanceof Node\Stmt\Namespace_ && !$new instanceof Node\Stmt\Namespace_) {
			return $this->compareStatementsInNamespace([$old], [$new], $updateTo);
		}

		throw new \LogicException('Something about a namespace changed');
	}

	/**
	 * @param Node\Stmt[] $oldStmts
	 * @param Node\Stmt[] $newStmts
	 * @return Node\Stmt[]
	 */
	private function compareStatementsInNamespace(array $oldStmts, array $newStmts, string $updateTo): array
	{
		if (count($oldStmts) !== 1 || count($newStmts) !== 1) {
			throw new \LogicException('There is supposed to be one statement in the AST');
		}

		$old = $oldStmts[0];
		$new = $newStmts[0];

		if ($old instanceof Node\Stmt\ClassLike && $new instanceof Node\Stmt\ClassLike) {
			if ($old->namespacedName->toString() !== $new->namespacedName->toString()) {
				throw new \LogicException('Classname changed');
			}
			$new->stmts = array_filter($new->stmts, fn (Node\Stmt $stmt) => $stmt instanceof Node\Stmt\ClassMethod);
			$oldMethods = [];
			foreach ($old->stmts as $stmt) {
				if (!$stmt instanceof Node\Stmt\ClassMethod) {
					continue;
				}

				$oldMethods[$stmt->name->toLowerString()] = $stmt;
			}

			if ($new->stmts !== null) {
				$newStmtsToSet = [];
				foreach ($new->stmts as $i => $stmt) {
					$methodName = $stmt->name->toLowerString();
					if (!array_key_exists($methodName, $oldMethods)) {
						$new->stmts[$i]->attrGroups[] = new Node\AttributeGroup([
							new Node\Attribute(
								new Node\Name\FullyQualified('Since'),
								[new Node\Arg(new Node\Scalar\String_($updateTo))],
							),
						]);
						continue;
					}

					foreach ($this->compareFunctions($oldMethods[$methodName], $stmt, $updateTo) as $functionStmt) {
						$newStmtsToSet[] = $functionStmt;
					}
				}

				// todo has a method been removed?

				$new->stmts = $newStmtsToSet;
			}

			return [$new];
		}

		if ($old instanceof Node\Stmt\Function_ && $new instanceof Node\Stmt\Function_) {
			return $this->compareFunctions($old, $new, $updateTo);
		}

		throw new \LogicException('Unknown AST node type combination');
	}

	/**
	 * @template T of Node\FunctionLike
	 * @param T $old
	 * @param T $new
	 * @return T[]
	 */
	private function compareFunctions(Node\FunctionLike $old, Node\FunctionLike $new, string $updateTo): array
	{
		if ($old->getReturnType() === null && $new->getReturnType() !== null) {
			if ($new->getDocComment() !== null && strpos($new->getDocComment()->getText(), '@tentative-return-type') !== false) {
				$new->returnType = null; // @phpstan-ignore-line
				if ($old->getDocComment() !== null) {
					$oldPhpDocNode = $this->parseDocComment($old->getDocComment()->getText());
					$oldPhpDocReturn = $this->findPhpDocReturn($oldPhpDocNode);
					if ($oldPhpDocNode !== null) {
						$newPhpDocNode = $this->parseDocComment($new->getDocComment()->getText());
						$newPhpDocReturn = $this->findPhpDocReturn($newPhpDocNode);
						if ($newPhpDocReturn === null) {
							$children = $newPhpDocNode->children;
							$children[] = new PhpDocTagNode('@return', $oldPhpDocReturn);
							$newPhpDocNodeWithReturn = new PhpDocNode($children);
							$new->setDocComment(new Comment\Doc((string) $newPhpDocNodeWithReturn));
						}
					}
				}
			}
		}
		if ($this->printType($old->getReturnType()) !== $this->printType($new->getReturnType())) {
			return $this->functionDiff($old, $new, $updateTo);
		}
		if ($old->returnsByRef() !== $new->returnsByRef()) {
			return $this->functionDiff($old, $new, $updateTo);
		}
		if (count($old->getParams()) !== count($new->getParams())) {
			return $this->functionDiff($old, $new, $updateTo);
		}

		foreach ($old->getParams() as $i => $oldParam) {
			$newParam = $new->getParams()[$i];
			if ($this->printType($oldParam->type) !== $this->printType($newParam->type)) {
				return $this->functionDiff($old, $new, $updateTo);
			}
			if ($oldParam->byRef !== $newParam->byRef) {
				return $this->functionDiff($old, $new, $updateTo);
			}
			if ($oldParam->variadic !== $newParam->variadic) {
				return $this->functionDiff($old, $new, $updateTo);
			}
			assert($oldParam->var instanceof Node\Expr\Variable);
			assert(is_string($oldParam->var->name));
			assert($newParam->var instanceof Node\Expr\Variable);
			assert(is_string($newParam->var->name));
			if ($oldParam->var->name !== $newParam->var->name) {
				return $this->functionDiff($old, $new, $updateTo);
			}
			if (is_null($oldParam->default) !== is_null($newParam->default)) {
				return $this->functionDiff($old, $new, $updateTo);
			}
			if ($oldParam->default !== null && $newParam->default !== null) {
				if ($this->printer->prettyPrintExpr($oldParam->default) !== $this->printer->prettyPrintExpr($newParam->default)) {
					return $this->functionDiff($old, $new, $updateTo);
				}
			}
			if ($oldParam->flags !== $newParam->flags) {
				return $this->functionDiff($old, $new, $updateTo);
			}
		}

		if ($old instanceof Node\Stmt\ClassMethod && $new instanceof Node\Stmt\ClassMethod) {
			if ($old->flags !== $new->flags) {
				return $this->functionDiff($old, $new, $updateTo);
			}
		}

		if (
			$old->getReturnType() !== null
			&& $new->getReturnType() !== null
			&& $new->getDocComment() !== null
		) {
			if ($old->getDocComment() === null || $this->findPhpDocReturn($this->parseDocComment($old->getDocComment()->getText())) === null) {
				$newPhpDocNode = $this->parseDocComment($new->getDocComment()->getText());
				if ($this->findPhpDocReturn($newPhpDocNode) !== null) {
					$newPhpDocNodeWithoutReturn = new PhpDocNode(array_values(array_filter($newPhpDocNode->children, function (PhpDocChildNode $child): bool {
						if (!$child instanceof PhpDocTagNode) {
							return true;
						}

						return !$child->value instanceof ReturnTagValueNode;
					})));
					if (count($newPhpDocNodeWithoutReturn->children) === 0) {
						$new->setAttribute('comments', []);
					} else {
						$new->setDocComment(new Comment\Doc((string) $newPhpDocNodeWithoutReturn));
					}
				}
			}
		}

		return [$new];
	}

	/**
	 * @template T of Node\FunctionLike
	 * @param T $old
	 * @param T $new
	 * @return T[]
	 */
	private function functionDiff(Node\FunctionLike $old, Node\FunctionLike $new, string $updateTo): array
	{
		$args = [new Node\Arg(new Node\Scalar\String_($updateTo))];
		$old = clone $old;

		// @phpstan-ignore-next-line
		$old->attrGroups[] = new Node\AttributeGroup([
			new Node\Attribute(
				new Node\Name\FullyQualified('Until'),
				$args,
			),
		]);
		$new = clone $new;

		// @phpstan-ignore-next-line
		$new->attrGroups[] = new Node\AttributeGroup([
			new Node\Attribute(
				new Node\Name\FullyQualified('Since'),
				$args,
			),
		]);
		return [$old, $new];
	}

	/**
	 * @param Node\Identifier|Node\Name|Node\ComplexType|null $type
	 */
	private function printType($type): ?string
	{
		if ($type === null) {
			return null;
		}

		if ($type instanceof Node\NullableType) {
			return '?' . $this->printType($type->type);
		}

		if ($type instanceof Node\UnionType) {
			return implode('|', array_map(function ($innerType): string {
				$printedType = $this->printType($innerType);
				if ($printedType === null) {
					throw new \LogicException();
				}

				return $printedType;
			}, $type->types));
		}

		if ($type instanceof Node\IntersectionType) {
			return implode('&', array_map(function ($innerType): string {
				$printedType = $this->printType($innerType);
				if ($printedType === null) {
					throw new \LogicException();
				}

				return $printedType;
			}, $type->types));
		}

		if ($type instanceof Node\Identifier || $type instanceof Node\Name) {
			return $type->toString();
		}

		throw new \LogicException();
	}

	private function filterClassPhpDocs(Node\Stmt\ClassLike $class): Node\Stmt\ClassLike
	{
		$namespacedName = $class->namespacedName->toString();
		$removePhpDocFromMethod = null;
		if (in_array($namespacedName, ['Throwable', 'Exception'], true)) {
			$removePhpDocFromMethod = 'getCode';
		}
		if ($namespacedName === 'PDO') {
			$removePhpDocFromMethod = 'setAttribute';
		}
		if ($namespacedName === 'SimpleXMLElement') {
			$removePhpDocFromMethod = 'current';
		}

		if ($removePhpDocFromMethod === null) {
			return $class;
		}

		$stmts = $class->stmts;
		foreach ($stmts as $stmt) {
			if (!$stmt instanceof Node\Stmt\ClassMethod) {
				continue;
			}

			if ($stmt->name->toLowerString() !== strtolower($removePhpDocFromMethod)) {
				continue;
			}

			$stmt->setAttribute('comments', []);
		}

		return $class;
	}

	private function parseDocComment(string $docComment): PhpDocNode
	{
		$tokens = new TokenIterator($this->phpDocLexer->tokenize($docComment));
		$phpDocNode = $this->phpDocParser->parse($tokens);
		$tokens->consumeTokenType(Lexer::TOKEN_END);

		return $phpDocNode;
	}

	private function findPhpDocReturn(PhpDocNode $node): ?ReturnTagValueNode
	{
		$returnTags = $node->getReturnTagValues();
		if (count($returnTags) !== 1) {
			return null;
		}

		return $returnTags[0];
	}

	/**
	 * @param array<string, string> $classes
	 * @param array<string, string> $functions
	 * @param array<string, string> $addClasses
	 * @param array<string, string> $addFunctions
	 */
	private function dumpMap(array $classes, array $functions, ?string $updateTo, array $addClasses, array $addFunctions): void
	{
		$template = <<<'PHP'
<?php declare(strict_types = 1);

namespace PHPStan;

class Php8StubsMap
{

	/** @var array<string, string> */
	public $classes;

	/** @var array<string, string> */
	public $functions;

	public function __construct(int $phpVersionId)
	{
		$classes = %s;
		$functions = %s;
		%s
		$this->classes = $classes;
		$this->functions = $functions;
	}

}
PHP;
		$updateTemplate = <<<'PHP'
if ($phpVersionId >= %d) {
	$classes = \array_merge($classes, %s);
	$functions = \array_merge($functions, %s);
}

// UPDATE BELONGS HERE
PHP;

		$phpVersion = null;
		if ($updateTo !== null) {
			$parts = explode('.', $updateTo);
			$phpVersion = (int) $parts[0] * 10000 + (int) ($parts[1] ?? 0) * 100 + (int) ($parts[2] ?? 0);
		}

		file_put_contents(
			__DIR__ . '/../Php8StubsMap.php',
			sprintf(
				$template,
				var_export($classes, true),
				var_export($functions, true),
				$phpVersion === null ? '// UPDATE BELONGS HERE' : sprintf(
					$updateTemplate,
					$phpVersion,
					var_export($addClasses, true),
					var_export($addFunctions, true)
				)
			),
		);
	}

};

$app = new Application();
$app->add($command);
$app->setDefaultCommand('extract', true);
$app->run();
