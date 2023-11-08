<?php 

class RecursiveArrayIterator extends \ArrayIterator implements \RecursiveIterator
{
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasChildren()
    {
    }
    /**
     * @tentative-return-type
     * @return (RecursiveArrayIterator | null)
     */
    public function getChildren()
    {
    }
    /**
     * @var int
     * @cvalue SPL_ARRAY_CHILD_ARRAYS_ONLY
     */
    #[\Since('8.2')]
    public const CHILD_ARRAYS_ONLY = UNKNOWN;
}