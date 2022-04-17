<?php 

class DOMNamedNodeMap implements \IteratorAggregate, \Countable
{
    /** @return DOMNode|null */
    #[\Until('8.1')]
    public function getNamedItem(string $qualifiedName)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNamedItem(string $qualifiedName) : ?DOMNode
    {
    }
    /** @return DOMNode|null */
    #[\Until('8.1')]
    public function getNamedItemNS(?string $namespace, string $localName)
    {
    }
    // TODO DOM spec returns DOMAttr
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNamedItemNS(?string $namespace, string $localName) : ?DOMNode
    {
    }
    /** @return DOMNode|null */
    #[\Until('8.1')]
    public function item(int $index)
    {
    }
    // TODO DOM spec returns DOMAttr
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function item(int $index) : ?DOMNode
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function count()
    {
    }
    // TODO DOM spec returns DOMAttr
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    public function getIterator() : Iterator
    {
    }
}