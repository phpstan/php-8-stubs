<?php 

/** @not-serializable */
class DOMNode
{
    /** @return DOMNode|false */
    public function appendChild(DOMNode $node)
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function C14N(bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function C14N(bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null) : string|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function C14NFile(string $uri, bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function C14NFile(string $uri, bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null) : int|false
    {
    }
    /** @return DOMNode|false */
    public function cloneNode(bool $deep = false)
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getLineNo()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getLineNo() : int
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getNodePath()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNodePath() : ?string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasAttributes()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasAttributes() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasChildNodes()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasChildNodes() : bool
    {
    }
    /** @return DOMNode|false */
    public function insertBefore(DOMNode $node, ?DOMNode $child = null)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDefaultNamespace(string $namespace)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDefaultNamespace(string $namespace) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isSameNode(DOMNode $otherNode)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isSameNode(DOMNode $otherNode) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isSupported(string $feature, string $version)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isSupported(string $feature, string $version) : bool
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function lookupNamespaceURI(?string $prefix)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lookupNamespaceURI(?string $prefix) : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function lookupPrefix(string $namespace)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lookupPrefix(string $namespace) : ?string
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function normalize()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function normalize() : void
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