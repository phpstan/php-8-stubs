<?php 

abstract class RecursiveFilterIterator extends \FilterIterator implements \RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasChildren() : bool
    {
    }
    /** @return RecursiveFilterIterator|null */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : ?RecursiveFilterIterator
    {
    }
}