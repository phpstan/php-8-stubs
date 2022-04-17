<?php 

class CallbackFilterIterator extends \FilterIterator
{
    public function __construct(Iterator $iterator, callable $callback)
    {
    }
    /** @tentative-return-type */
    public function accept()
    {
    }
}