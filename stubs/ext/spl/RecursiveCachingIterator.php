<?php 

class RecursiveCachingIterator extends \CachingIterator implements \RecursiveIterator
{
    public function __construct(Iterator $iterator, int $flags = RecursiveCachingIterator::CALL_TOSTRING)
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
    /** @return RecursiveCachingIterator|null */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : ?RecursiveCachingIterator
    {
    }
}