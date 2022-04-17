<?php 

class DOMElement extends \DOMNode implements \DOMParentNode, \DOMChildNode
{
    public function __construct(string $qualifiedName, ?string $value = null, string $namespace = "")
    {
    }
    /** @tentative-return-type */
    public function getAttribute(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    public function getAttributeNS(?string $namespace, string $localName)
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
    /** @tentative-return-type */
    public function getElementsByTagName(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    public function getElementsByTagNameNS(?string $namespace, string $localName)
    {
    }
    /** @tentative-return-type */
    public function hasAttribute(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    public function hasAttributeNS(?string $namespace, string $localName)
    {
    }
    /** @tentative-return-type */
    public function removeAttribute(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    public function removeAttributeNS(?string $namespace, string $localName)
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
    // TODO return type shouldn't depend on the call scope
    /** @tentative-return-type */
    public function setAttributeNS(?string $namespace, string $qualifiedName, string $value)
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
    /** @tentative-return-type */
    public function setIdAttribute(string $qualifiedName, bool $isId)
    {
    }
    /** @tentative-return-type */
    public function setIdAttributeNS(string $namespace, string $qualifiedName, bool $isId)
    {
    }
    /** @tentative-return-type */
    public function setIdAttributeNode(DOMAttr $attr, bool $isId)
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