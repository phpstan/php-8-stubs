#!/usr/bin/env php
<?php declare(strict_types = 1);

use PhpParser\Node;
use PhpParser\ParserFactory;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
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

	public function __construct(
		\PhpParser\Parser $parser,
		\PhpParser\PrettyPrinter\Standard $printer
	)
	{
		parent::__construct();
		$this->parser = $parser;
		$this->printer = $printer;
	}

	protected function configure()
	{
		$this->setName('extract');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int
	{
		$ourStubsDir = realpath(__DIR__ . '/../stubs');
		$this->clearOldStubs($ourStubsDir);
		$srcDir = realpath(__DIR__ . '/../php-src');
		$finder = new Finder();
		$finder->files()->in($srcDir)->name('*.stub.php');

		$classes = [];
		$functions = [];
		foreach ($finder as $file) {
			$stubPath = $file->getRealPath();
			[$tmpClasses, $tmpFunctions] = $this->extractStub($stubPath, $file->getRelativePathname(), $ourStubsDir);
			foreach ($tmpClasses as $className => $fileName) {
				$classes[$className] = $fileName;
			}
			foreach ($tmpFunctions as $functionName => $fileName) {
				$functions[$functionName] = $fileName;
			}
		}

		$this->dumpMap($classes, $functions);

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
	 * @param string $ourStubsDir
	 * @return array{array<string, string>, array<string, string>}
	 */
	private function extractStub(string $stubPath, string $relativeStubPath, string $ourStubsDir): array
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
			}

			/**
			 * @return Node\Stmt[]
			 */
			public function getStmts(): array
			{
				return $this->stmts;
			}
		};

		$nodeTraverser->addVisitor($visitor);
		$nodeTraverser->traverse($this->parser->parse(file_get_contents($stubPath)));

		$stmts = $visitor->getStmts();
		$classes = [];
		$functions = [];
		foreach ($stmts as $stmt) {
			$namespacedName = $stmt->namespacedName->toString();
			$pathPart = 'stubs/' . dirname($relativeStubPath) . '/' . str_replace('\\', '/', $namespacedName) . '.php';
			$targetStubPath = __DIR__ . '/../' . $pathPart;

			if ($stmt instanceof Node\Stmt\Class_ || $stmt instanceof Node\Stmt\Interface_ || $stmt instanceof Node\Stmt\Trait_) {
				$classes[strtolower($namespacedName)] = $pathPart;
				$stmt = $this->filterClassPhpDocs($stmt);
			} elseif ($stmt instanceof Node\Stmt\Function_) {
				$functions[strtolower($namespacedName)] = $pathPart;
			} else {
				throw new \Exception(sprintf('Unhandled node type %s in %s on line %s.', get_class($stmt), $stubPath, $stmt->getLine()));
			}

			if (strpos($namespacedName, '\\') !== false) {
				$stmt = new Node\Stmt\Namespace_($stmt->namespacedName->slice(0, -1), [$stmt]);
			}

			@mkdir(dirname($targetStubPath), 0777, true);
			if (is_file($targetStubPath)) {
				continue;
			}
			file_put_contents($targetStubPath, "<?php \n\n" . $this->printer->prettyPrint([$stmt]));
		}

		return [$classes, $functions];
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

	/**
	 * @param array<string, string> $classes
	 * @param array<string, string> $functions
	 */
	private function dumpMap(array $classes, array $functions): void
	{
		$template = <<<'PHP'
<?php declare(strict_types = 1);

namespace PHPStan;

class Php8StubsMap
{

	public const CLASSES = %s;
	
	public const FUNCTIONS = %s;

}
PHP;

		file_put_contents(
			__DIR__ . '/../Php8StubsMap.php',
			sprintf($template, var_export($classes, true), var_export($functions, true))
		);

	}

};

$app = new Application();
$app->add($command);
$app->setDefaultCommand('extract', true);
$app->run();
