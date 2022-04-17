<?php 

class RecursiveCallbackFilterIterator extends \CallbackFilterIterator implements \RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator, callable $callback)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    public function getChildren()
    {
    }
}