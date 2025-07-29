<?php 

namespace Dom;

#[\Since('8.4')]
class Attr extends \Dom\Node
{
    /** @implementation-alias DOMAttr::isId */
    public function isId(): bool
    {
    }
    /** @implementation-alias Dom\Element::rename */
    public function rename(?string $namespaceURI, string $qualifiedName): void
    {
    }
}