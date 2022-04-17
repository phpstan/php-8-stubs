<?php 

abstract class FilterIterator extends \IteratorIterator
{
    /** @tentative-return-type */
    public abstract function accept();
    public function __construct(Iterator $iterator)
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function next()
    {
    }
}