<?php 

/** @not-serializable */
class SimpleXMLElement implements \Stringable, \Countable, \RecursiveIterator
{
    /** @tentative-return-type */
    public function xpath(string $expression)
    {
    }
    /** @tentative-return-type */
    public function registerXPathNamespace(string $prefix, string $namespace)
    {
    }
    /** @tentative-return-type */
    public function asXML(?string $filename = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias SimpleXMLElement::asXML
     */
    public function saveXML(?string $filename = null)
    {
    }
    /** @tentative-return-type */
    public function getNamespaces(bool $recursive = false)
    {
    }
    /** @tentative-return-type */
    public function getDocNamespaces(bool $recursive = false, bool $fromRoot = true)
    {
    }
    /** @tentative-return-type */
    public function children(?string $namespaceOrPrefix = null, bool $isPrefix = false)
    {
    }
    /** @tentative-return-type */
    public function attributes(?string $namespaceOrPrefix = null, bool $isPrefix = false)
    {
    }
    public function __construct(string $data, int $options = 0, bool $dataIsURL = false, string $namespaceOrPrefix = "", bool $isPrefix = false)
    {
    }
    /** @tentative-return-type */
    public function addChild(string $qualifiedName, ?string $value = null, ?string $namespace = null)
    {
    }
    /** @tentative-return-type */
    public function addAttribute(string $qualifiedName, string $value, ?string $namespace = null)
    {
    }
    /** @tentative-return-type */
    public function getName()
    {
    }
    public function __toString() : string
    {
    }
    /** @tentative-return-type */
    public function count()
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function valid()
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
    /** @tentative-return-type */
    public function key()
    {
    }
    /** @tentative-return-type */
    public function next()
    {
    }
    /** @tentative-return-type */
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    public function getChildren()
    {
    }
}