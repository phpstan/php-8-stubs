<?php 

class DOMNode
{
    #[\Since('8.1')]
    public function __sleep(): array
    {
    }
    #[\Since('8.1')]
    public function __wakeup(): void
    {
    }
    /** @return DOMNode|false */
    public function appendChild(DOMNode $node)
    {
    }
    /**
     * @tentative-return-type
     * @return (string | false)
     */
    public function C14N(bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null)
    {
    }
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function C14NFile(string $uri, bool $exclusive = false, bool $withComments = false, ?array $xpath = null, ?array $nsPrefixes = null)
    {
    }
    /** @return DOMNode|false */
    public function cloneNode(bool $deep = false)
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function getLineNo()
    {
    }
    /**
     * @tentative-return-type
     * @return (string | null)
     */
    public function getNodePath()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasAttributes()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasChildNodes()
    {
    }
    /** @return DOMNode|false */
    public function insertBefore(DOMNode $node, ?DOMNode $child = null)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isDefaultNamespace(string $namespace)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isSameNode(DOMNode $otherNode)
    {
    }
    #[\Since('8.2')]
    public function isEqualNode(?DOMNode $otherNode): bool
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isSupported(string $feature, string $version)
    {
    }
    /**
     * @tentative-return-type
     * @return (string | null)
     */
    public function lookupNamespaceURI(?string $prefix)
    {
    }
    /**
     * @tentative-return-type
     * @return (string | null)
     */
    public function lookupPrefix(string $namespace)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
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
    #[\Since('8.2')]
    public function contains(DOMNode|DOMNameSpaceNode|null $other): bool
    {
    }
    #[\Since('8.2')]
    public function getRootNode(?array $options = null): DOMNode
    {
    }
}