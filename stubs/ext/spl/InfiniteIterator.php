<?php 

class InfiniteIterator extends \IteratorIterator
{
    public function __construct(Iterator $iterator)
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
}