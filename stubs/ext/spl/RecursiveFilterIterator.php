<?php 

abstract class RecursiveFilterIterator extends \FilterIterator implements \RecursiveIterator
{
    public function __construct(RecursiveIterator $iterator)
    {
    }
    /** @tentative-return-type */
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    public function getChildren()
    {
    }
}