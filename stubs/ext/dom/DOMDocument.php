<?php 

class DOMDocument extends \DOMNode implements \DOMParentNode
{
    public function __construct(string $version = "1.0", string $encoding = "")
    {
    }
    /** @return DOMAttr|false */
    #[\Since('8.3')]
    public function createAttribute(string $localName)
    {
    }
    /** @return DOMAttr|false */
    #[\Since('8.3')]
    public function createAttributeNS(?string $namespace, string $qualifiedName)
    {
    }
    /** @return DOMCdataSection|false */
    #[\Since('8.3')]
    public function createCDATASection(string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function createComment(string $data): DOMComment
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function createDocumentFragment(): DOMDocumentFragment
    {
    }
    /** @return DOMElement|false */
    #[\Since('8.3')]
    public function createElement(string $localName, string $value = "")
    {
    }
    /** @return DOMElement|false */
    #[\Since('8.3')]
    public function createElementNS(?string $namespace, string $qualifiedName, string $value = "")
    {
    }
    /** @return DOMEntityReference|false */
    public function createEntityReference(string $name)
    {
    }
    /** @return DOMProcessingInstruction|false */
    #[\Since('8.3')]
    public function createProcessingInstruction(string $target, string $data = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function createTextNode(string $data): DOMText
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function getElementById(string $elementId): ?DOMElement
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function getElementsByTagName(string $qualifiedName): DOMNodeList
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function getElementsByTagNameNS(?string $namespace, string $localName): DOMNodeList
    {
    }
    /** @return DOMNode|false */
    #[\Since('8.3')]
    public function importNode(DOMNode $node, bool $deep = false)
    {
    }
    /**
     * @tentative-return-type
     * @return (DOMDocument | bool)
     */
    public function load(string $filename, int $options = 0)
    {
    }
    /**
     * @tentative-return-type
     * @return (DOMDocument | bool)
     */
    public function loadXML(string $source, int $options = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function normalizeDocument(): void
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function registerNodeClass(string $baseClass, ?string $extendedClass): bool
    {
    }
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function save(string $filename, int $options = 0)
    {
    }
    #ifdef LIBXML_HTML_ENABLED
    /**
     * @tentative-return-type
     * @return (DOMDocument | bool)
     */
    public function loadHTML(string $source, int $options = 0)
    {
    }
    /**
     * @tentative-return-type
     * @return (DOMDocument | bool)
     */
    public function loadHTMLFile(string $filename, int $options = 0)
    {
    }
    /**
     * @tentative-return-type
     * @return (string | false)
     */
    public function saveHTML(?DOMNode $node = null)
    {
    }
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function saveHTMLFile(string $filename)
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @return (string | false)
     */
    public function saveXML(?DOMNode $node = null, int $options = 0)
    {
    }
    #ifdef LIBXML_SCHEMAS_ENABLED
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function schemaValidate(string $filename, int $flags = 0): bool
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function schemaValidateSource(string $source, int $flags = 0): bool
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function relaxNGValidate(string $filename): bool
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function relaxNGValidateSource(string $source): bool
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @return bool
     */
    public function validate()
    {
    }
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function xinclude(int $options = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    public function adoptNode(DOMNode $node): DOMNode|false
    {
    }
    /** @param DOMNode|string $nodes */
    #[\Since('8.3')]
    public function append(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    #[\Since('8.3')]
    public function prepend(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    #[\Since('8.3')]
    public function replaceChildren(...$nodes): void
    {
    }
}