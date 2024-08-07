<?php 

namespace Dom;

#[\Since('8.4')]
class Attr extends \Dom\Node
{
    /** @readonly */
    public ?string $namespaceURI;
    /** @readonly */
    public ?string $prefix;
    /** @readonly */
    public string $localName;
    /** @readonly */
    public string $name;
    public string $value;
    /** @readonly */
    public ?Element $ownerElement;
    /** @readonly */
    public bool $specified = true;
    /** @implementation-alias DOMAttr::isId */
    public function isId(): bool
    {
    }
    /** @implementation-alias Dom\Element::rename */
    public function rename(?string $namespaceURI, string $qualifiedName): void
    {
    }
}