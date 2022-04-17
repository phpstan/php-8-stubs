<?php 

class DOMDocument extends \DOMNode implements \DOMParentNode
{
    public function __construct(string $version = "1.0", string $encoding = "")
    {
    }
    /** @return DOMAttr|false */
    public function createAttribute(string $localName)
    {
    }
    /** @return DOMAttr|false */
    public function createAttributeNS(?string $namespace, string $qualifiedName)
    {
    }
    /** @return DOMCdataSection|false */
    public function createCDATASection(string $data)
    {
    }
    /** @return DOMComment|false */
    #[\Until('8.1')]
    public function createComment(string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function createComment(string $data) : DOMComment
    {
    }
    /** @return DOMDocumentFragment|false */
    #[\Until('8.1')]
    public function createDocumentFragment()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function createDocumentFragment() : DOMDocumentFragment
    {
    }
    /** @return DOMElement|false */
    public function createElement(string $localName, string $value = "")
    {
    }
    /** @return DOMElement|false */
    public function createElementNS(?string $namespace, string $qualifiedName, string $value = "")
    {
    }
    /** @return DOMEntityReference|false */
    public function createEntityReference(string $name)
    {
    }
    /** @return DOMProcessingInstruction|false */
    public function createProcessingInstruction(string $target, string $data = "")
    {
    }
    /** @return DOMText|false */
    #[\Until('8.1')]
    public function createTextNode(string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function createTextNode(string $data) : DOMText
    {
    }
    /** @return DOMElement|null */
    #[\Until('8.1')]
    public function getElementById(string $elementId)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getElementById(string $elementId) : ?DOMElement
    {
    }
    /** @return DOMNodeList */
    #[\Until('8.1')]
    public function getElementsByTagName(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getElementsByTagName(string $qualifiedName) : DOMNodeList
    {
    }
    /** @return DOMNodeList */
    #[\Until('8.1')]
    public function getElementsByTagNameNS(?string $namespace, string $localName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getElementsByTagNameNS(?string $namespace, string $localName) : DOMNodeList
    {
    }
    /** @return DOMNode|false */
    public function importNode(DOMNode $node, bool $deep = false)
    {
    }
    /** @return DOMDocument|bool */
    public function load(string $filename, int $options = 0)
    {
    }
    // TODO return type shouldn't depend on the call scope
    /** @return DOMDocument|bool */
    public function loadXML(string $source, int $options = 0)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function normalizeDocument()
    {
    }
    // TODO return type shouldn't depend on the call scope
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function normalizeDocument() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function registerNodeClass(string $baseClass, ?string $extendedClass)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerNodeClass(string $baseClass, ?string $extendedClass) : bool
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function save(string $filename, int $options = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function save(string $filename, int $options = 0) : int|false
    {
    }
    #ifdef LIBXML_HTML_ENABLED
    /** @return DOMDocument|bool */
    public function loadHTML(string $source, int $options = 0)
    {
    }
    // TODO return type shouldn't depend on the call scope
    /** @return DOMDocument|bool */
    public function loadHTMLFile(string $filename, int $options = 0)
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function saveHTML(?DOMNode $node = null)
    {
    }
    // TODO return type shouldn't depend on the call scope
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function saveHTML(?DOMNode $node = null) : string|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function saveHTMLFile(string $filename)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function saveHTMLFile(string $filename) : int|false
    {
    }
    #endif
    /** @return string|false */
    #[\Until('8.1')]
    public function saveXML(?DOMNode $node = null, int $options = 0)
    {
    }
    #endif
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function saveXML(?DOMNode $node = null, int $options = 0) : string|false
    {
    }
    #ifdef LIBXML_SCHEMAS_ENABLED
    /** @return bool */
    #[\Until('8.1')]
    public function schemaValidate(string $filename, int $flags = 0)
    {
    }
    #ifdef LIBXML_SCHEMAS_ENABLED
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function schemaValidate(string $filename, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function schemaValidateSource(string $source, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function schemaValidateSource(string $source, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function relaxNGValidate(string $filename)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function relaxNGValidate(string $filename) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function relaxNGValidateSource(string $source)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function relaxNGValidateSource(string $source) : bool
    {
    }
    #endif
    /** @return bool */
    #[\Until('8.1')]
    public function validate()
    {
    }
    #endif
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function validate() : bool
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function xinclude(int $options = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function xinclude(int $options = 0) : int|false
    {
    }
    /** @return DOMNode|false */
    public function adoptNode(DOMNode $node)
    {
    }
    /** @param DOMNode|string $nodes */
    public function append(...$nodes) : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function prepend(...$nodes) : void
    {
    }
}