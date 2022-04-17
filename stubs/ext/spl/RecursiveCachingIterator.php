<?php 

class RecursiveCachingIterator extends \CachingIterator implements \RecursiveIterator
{
    public function __construct(Iterator $iterator, int $flags = RecursiveCachingIterator::CALL_TOSTRING)
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