<?php 

/** @not-serializable */
class DOMNode
{
    /** @return DOMNode|false */
    public function appendChild(DOMNode $node)
    {
    }
    /** @tentative-return-type */
    public function C14N(bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null)
    {
    }
    /** @tentative-return-type */
    public function C14NFile(string $uri, bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null)
    {
    }
    /** @return DOMNode|false */
    public function cloneNode(bool $deep = false)
    {
    }
    /** @tentative-return-type */
    public function getLineNo()
    {
    }
    /** @tentative-return-type */
    public function getNodePath()
    {
    }
    /** @tentative-return-type */
    public function hasAttributes()
    {
    }
    /** @tentative-return-type */
    public function hasChildNodes()
    {
    }
    /** @return DOMNode|false */
    public function insertBefore(DOMNode $node, ?DOMNode $child = null)
    {
    }
    /** @tentative-return-type */
    public function isDefaultNamespace(string $namespace)
    {
    }
    /** @tentative-return-type */
    public function isSameNode(DOMNode $otherNode)
    {
    }
    /** @tentative-return-type */
    public function isSupported(string $feature, string $version)
    {
    }
    /** @tentative-return-type */
    public function lookupNamespaceURI(?string $prefix)
    {
    }
    /** @tentative-return-type */
    public function lookupPrefix(string $namespace)
    {
    }
    /** @tentative-return-type */
    public function normalize()
    {
    }
    /** @return DOMNode|false */
    public function removeChild(DOMNode $child)
    {
    }
    /** @return DOMNode|false */
    public function replaceChild(DOMNode $node, DOMNode $child)
    {
    }
}