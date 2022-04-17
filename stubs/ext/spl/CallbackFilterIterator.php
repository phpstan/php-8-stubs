<?php 

class CallbackFilterIterator extends \FilterIterator
{
    public function __construct(Iterator $iterator, callable $callback)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function accept()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function accept() : bool
    {
    }
}