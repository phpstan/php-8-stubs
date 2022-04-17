<?php 

class RecursiveArrayIterator extends \ArrayIterator implements \RecursiveIterator
{
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
    /** @return RecursiveArrayIterator|null */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : ?RecursiveArrayIterator
    {
    }
}