<?php 

class DOMElement extends \DOMNode implements \DOMParentNode, \DOMChildNode
{
    public function __construct(string $qualifiedName, ?string $value = null, string $namespace = "")
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getAttribute(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttribute(string $qualifiedName) : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getAttributeNS(?string $namespace, string $localName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttributeNS(?string $namespace, string $localName) : string
    {
    }
    /** @return DOMAttr|DOMNameSpaceNode|false */
    public function getAttributeNode(string $qualifiedName)
    {
    }
    /** @return DOMAttr|DOMNameSpaceNode|null */
    public function getAttributeNodeNS(?string $namespace, string $localName)
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
    /** @return bool */
    #[\Until('8.1')]
    public function hasAttribute(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasAttribute(string $qualifiedName) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasAttributeNS(?string $namespace, string $localName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasAttributeNS(?string $namespace, string $localName) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function removeAttribute(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function removeAttribute(string $qualifiedName) : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function removeAttributeNS(?string $namespace, string $localName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function removeAttributeNS(?string $namespace, string $localName) : void
    {
    }
    /** @return DOMAttr|false */
    public function removeAttributeNode(DOMAttr $attr)
    {
    }
    /** @return DOMAttr|bool */
    public function setAttribute(string $qualifiedName, string $value)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setAttributeNS(?string $namespace, string $qualifiedName, string $value)
    {
    }
    // TODO return type shouldn't depend on the call scope
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setAttributeNS(?string $namespace, string $qualifiedName, string $value) : void
    {
    }
    /** @return DOMAttr|null|false */
    public function setAttributeNode(DOMAttr $attr)
    {
    }
    /** @return DOMAttr|null|false */
    public function setAttributeNodeNS(DOMAttr $attr)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setIdAttribute(string $qualifiedName, bool $isId)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setIdAttribute(string $qualifiedName, bool $isId) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setIdAttributeNS(string $namespace, string $qualifiedName, bool $isId)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setIdAttributeNS(string $namespace, string $qualifiedName, bool $isId) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setIdAttributeNode(DOMAttr $attr, bool $isId)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setIdAttributeNode(DOMAttr $attr, bool $isId) : void
    {
    }
    public function remove() : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function before(...$nodes) : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function after(...$nodes) : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function replaceWith(...$nodes) : void
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