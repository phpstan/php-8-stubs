<?php 

/** @not-serializable */
class SimpleXMLElement implements \Stringable, \Countable, \RecursiveIterator
{
    /** @return array|null|false */
    #[\Until('8.1')]
    public function xpath(string $expression)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function xpath(string $expression) : array|null|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function registerXPathNamespace(string $prefix, string $namespace)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerXPathNamespace(string $prefix, string $namespace) : bool
    {
    }
    /** @return string|bool */
    #[\Until('8.1')]
    public function asXML(?string $filename = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function asXML(?string $filename = null) : string|bool
    {
    }
    /**
     * @return string|bool
     * @alias SimpleXMLElement::asXML
     */
    #[\Until('8.1')]
    public function saveXML(?string $filename = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias SimpleXMLElement::asXML
     */
    #[\Since('8.1')]
    public function saveXML(?string $filename = null) : string|bool
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getNamespaces(bool $recursive = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNamespaces(bool $recursive = false) : array
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function getDocNamespaces(bool $recursive = false, bool $fromRoot = true)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDocNamespaces(bool $recursive = false, bool $fromRoot = true) : array|false
    {
    }
    /** @return SimpleXMLElement|null */
    #[\Until('8.1')]
    public function children(?string $namespaceOrPrefix = null, bool $isPrefix = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function children(?string $namespaceOrPrefix = null, bool $isPrefix = false) : ?SimpleXMLElement
    {
    }
    /** @return SimpleXMLElement|null */
    #[\Until('8.1')]
    public function attributes(?string $namespaceOrPrefix = null, bool $isPrefix = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function attributes(?string $namespaceOrPrefix = null, bool $isPrefix = false) : ?SimpleXMLElement
    {
    }
    public function __construct(string $data, int $options = 0, bool $dataIsURL = false, string $namespaceOrPrefix = "", bool $isPrefix = false)
    {
    }
    /** @return SimpleXMLElement|null */
    #[\Until('8.1')]
    public function addChild(string $qualifiedName, ?string $value = null, ?string $namespace = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addChild(string $qualifiedName, ?string $value = null, ?string $namespace = null) : ?SimpleXMLElement
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function addAttribute(string $qualifiedName, string $value, ?string $namespace = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addAttribute(string $qualifiedName, string $value, ?string $namespace = null) : void
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getName() : string
    {
    }
    public function __toString() : string
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function count()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function valid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function valid() : bool
    {
    }
    #[\Until('8.1')]
    public function current()
    {
    }
    #[\Since('8.1')]
    public function current() : SimpleXMLElement
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : string
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function next()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasChildren() : bool
    {
    }
    /** @return SimpleXMLElement|null */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : ?SimpleXMLElement
    {
    }
}