<?php 

class RecursiveCallbackFilterIterator extends \CallbackFilterIterator implements \RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator, callable $callback)
    {
    }
    /**
     * @return bool
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    #[\Until('8.1')]
    public function hasChildren()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    #[\Since('8.1')]
    public function hasChildren() : bool
    {
    }
    /** @return RecursiveCallbackFilterIterator */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : RecursiveCallbackFilterIterator
    {
    }
}