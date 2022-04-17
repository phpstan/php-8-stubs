<?php 

abstract class FilterIterator extends \IteratorIterator
{
    /** @return bool */
    #[\Until('8.1')]
    public abstract function accept();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public abstract function accept() : bool;
    public function __construct(Iterator $iterator)
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