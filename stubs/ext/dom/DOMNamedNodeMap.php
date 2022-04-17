<?php 

class DOMNamedNodeMap implements \IteratorAggregate, \Countable
{
    /** @tentative-return-type */
    public function getNamedItem(string $qualifiedName)
    {
    }
    // TODO DOM spec returns DOMAttr
    /** @tentative-return-type */
    public function getNamedItemNS(?string $namespace, string $localName)
    {
    }
    // TODO DOM spec returns DOMAttr
    /** @tentative-return-type */
    public function item(int $index)
    {
    }
    // TODO DOM spec returns DOMAttr
    /** @tentative-return-type */
    public function count()
    {
    }
    public function getIterator() : Iterator
    {
    }
}