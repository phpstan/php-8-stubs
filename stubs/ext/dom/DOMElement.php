<?php 

class DOMElement extends \DOMNode implements \DOMParentNode, \DOMChildNode
{
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function getAttributeNames(): array
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function toggleAttribute(string $qualifiedName, ?bool $force = null): bool
    {
    }
    /** @param DOMNode|string $nodes */
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function replaceChildren(...$nodes): void
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function insertAdjacentElement(string $where, DOMElement $element): ?DOMElement
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function insertAdjacentText(string $where, string $data): void
    {
    }
    public function __construct(string $qualifiedName, ?string $value = null, string $namespace = "")
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    public function getAttribute(string $qualifiedName)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getAttributeNames(): array
    {
    }
    #[\Since('8.5')]
    public function getAttributeNames(): array
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
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
    /**
     * @tentative-return-type
     * @return DOMNodeList
     */
    public function getElementsByTagName(string $qualifiedName)
    {
    }
    /**
     * @tentative-return-type
     * @return DOMNodeList
     */
    public function getElementsByTagNameNS(?string $namespace, string $localName)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasAttribute(string $qualifiedName)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasAttributeNS(?string $namespace, string $localName)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function removeAttribute(string $qualifiedName)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
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
    /**
     * @tentative-return-type
     * @return void
     */
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
    /**
     * @tentative-return-type
     * @return void
     */
    public function setIdAttribute(string $qualifiedName, bool $isId)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setIdAttributeNS(string $namespace, string $qualifiedName, bool $isId)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setIdAttributeNode(DOMAttr $attr, bool $isId)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function toggleAttribute(string $qualifiedName, ?bool $force = null): bool
    {
    }
    #[\Since('8.5')]
    public function toggleAttribute(string $qualifiedName, ?bool $force = null): bool
    {
    }
    public function remove(): void
    {
    }
    /** @param DOMNode|string $nodes */
    public function before(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    public function after(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    public function replaceWith(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    public function append(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    public function prepend(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function replaceChildren(...$nodes): void
    {
    }
    /** @param DOMNode|string $nodes */
    #[\Since('8.5')]
    public function replaceChildren(...$nodes): void
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function insertAdjacentElement(string $where, DOMElement $element): ?DOMElement
    {
    }
    #[\Since('8.5')]
    public function insertAdjacentElement(string $where, DOMElement $element): ?DOMElement
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function insertAdjacentText(string $where, string $data): void
    {
    }
    #[\Since('8.5')]
    public function insertAdjacentText(string $where, string $data): void
    {
    }
}