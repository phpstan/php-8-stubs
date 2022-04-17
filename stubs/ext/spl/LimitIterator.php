<?php 

class LimitIterator extends \IteratorIterator
{
    public function __construct(Iterator $iterator, int $offset = 0, int $limit = -1)
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
    public function seek(int $offset)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function seek(int $offset) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getPosition()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPosition() : int
    {
    }
}