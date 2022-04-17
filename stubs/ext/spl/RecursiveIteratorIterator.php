<?php 

class RecursiveIteratorIterator implements \OuterIterator
{
    public function __construct(Traversable $iterator, int $mode = RecursiveIteratorIterator::LEAVES_ONLY, int $flags = 0)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function valid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function valid() : bool
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : mixed
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function next()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next() : void
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getDepth()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDepth() : int
    {
    }
    /** @return RecursiveIterator|null */
    #[\Until('8.1')]
    public function getSubIterator(?int $level = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSubIterator(?int $level = null) : ?RecursiveIterator
    {
    }
    /** @return RecursiveIterator */
    #[\Until('8.1')]
    public function getInnerIterator()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getInnerIterator() : RecursiveIterator
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function beginIteration()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function beginIteration() : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function endIteration()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function endIteration() : void
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public function callHasChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function callHasChildren() : bool
    {
    }
    /** @return RecursiveIterator|null */
    #[\Until('8.1')]
    public function callGetChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function callGetChildren() : ?RecursiveIterator
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function beginChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function beginChildren() : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function endChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function endChildren() : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function nextElement()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function nextElement() : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setMaxDepth(int $maxDepth = -1)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMaxDepth(int $maxDepth = -1) : void
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getMaxDepth()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMaxDepth() : int|false
    {
    }
}