<?php 

namespace DOM;

#[\Since('8.2')]
abstract class Document extends \DOMNode implements \DOMParentNode
{
    /** @readonly */
    public ?DocumentType $doctype;
    /** @readonly */
    public ?Element $documentElement;
    public ?string $encoding;
    public bool $strictErrorChecking;
    public ?string $documentURI;
    /** @readonly */
    public ?Element $firstElementChild;
    /** @readonly */
    public ?Element $lastElementChild;
    /** @readonly */
    public int $childElementCount;
    /** @return Attr|false */
    public function createAttribute(string $localName)
    {
    }
    /** @return Attr|false */
    public function createAttributeNS(?string $namespace, string $qualifiedName)
    {
    }
    /** @return CDATASection|false */
    public function createCDATASection(string $data)
    {
    }
    /** @tentative-return-type */
    public function createComment(string $data): Comment
    {
    }
    /** @tentative-return-type */
    public function createDocumentFragment(): DocumentFragment
    {
    }
    /** @return Element|false */
    public function createElement(string $localName, string $value = "")
    {
    }
    /** @return Element|false */
    public function createElementNS(?string $namespace, string $qualifiedName, string $value = "")
    {
    }
    /** @return ProcessingInstruction|false */
    public function createProcessingInstruction(string $target, string $data = "")
    {
    }
    /** @tentative-return-type */
    public function createTextNode(string $data): Text
    {
    }
    /** @tentative-return-type */
    public function getElementById(string $elementId): ?Element
    {
    }
    /** @tentative-return-type */
    public function getElementsByTagName(string $qualifiedName): NodeList
    {
    }
    /** @tentative-return-type */
    public function getElementsByTagNameNS(?string $namespace, string $localName): NodeList
    {
    }
    /** @return Node|false */
    public function importNode(Node $node, bool $deep = false)
    {
    }
    /** @tentative-return-type */
    public function normalizeDocument(): void
    {
    }
    /** @tentative-return-type */
    public function registerNodeClass(string $baseClass, ?string $extendedClass): true
    {
    }
    #ifdef LIBXML_SCHEMAS_ENABLED
    /** @tentative-return-type */
    public function schemaValidate(string $filename, int $flags = 0): bool
    {
    }
    /** @tentative-return-type */
    public function schemaValidateSource(string $source, int $flags = 0): bool
    {
    }
    /** @tentative-return-type */
    public function relaxNGValidate(string $filename): bool
    {
    }
    /** @tentative-return-type */
    public function relaxNGValidateSource(string $source): bool
    {
    }
    #endif
    /** @tentative-return-type */
    public function adoptNode(Node $node): Node|false
    {
    }
    /**
     * @param Node|string $nodes
     * @implementation-alias DOMElement::append
     */
    public function append(...$nodes): void
    {
    }
    /**
     * @param Node|string $nodes
     * @implementation-alias DOMElement::prepend
     */
    public function prepend(...$nodes): void
    {
    }
    /** @param Node|string $nodes */
    public function replaceChildren(...$nodes): void
    {
    }
}