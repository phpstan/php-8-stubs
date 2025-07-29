<?php 

class RecursiveArrayIterator extends \ArrayIterator implements \RecursiveIterator
{
    /**
     * @var int
     * @cvalue SPL_ARRAY_CHILD_ARRAYS_ONLY
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const CHILD_ARRAYS_ONLY = UNKNOWN;
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
    /** @cvalue SPL_ARRAY_CHILD_ARRAYS_ONLY */
    #[\Since('8.4')]
    public const int CHILD_ARRAYS_ONLY = UNKNOWN;
}