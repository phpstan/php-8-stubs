<?php 

class ParentIterator extends \RecursiveFilterIterator
{
    public function __construct(RecursiveIterator $iterator)
    {
    }
    /**
     * @return bool
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    #[\Until('8.1')]
    public function accept()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias RecursiveFilterIterator::hasChildren
     */
    #[\Since('8.1')]
    public function accept() : bool
    {
    }
}