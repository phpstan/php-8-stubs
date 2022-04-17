<?php 

class DOMNodeList implements \IteratorAggregate, \Countable
{
    /** @return int|false */
    #[\Until('8.1')]
    public function count()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    public function getIterator() : Iterator
    {
    }
    /** @return DOMNode|DOMNameSpaceNode|null */
    public function item(int $index)
    {
    }
}