<?php 

class MultipleIterator implements \Iterator
{
    public function __construct(int $flags = MultipleIterator::MIT_NEED_ALL | MultipleIterator::MIT_KEYS_NUMERIC)
    {
    }
    /** @tentative-return-type */
    public function getFlags()
    {
    }
    /** @tentative-return-type */
    public function setFlags(int $flags)
    {
    }
    /** @tentative-return-type */
    public function attachIterator(Iterator $iterator, string|int|null $info = null)
    {
    }
    /** @tentative-return-type */
    public function detachIterator(Iterator $iterator)
    {
    }
    /** @tentative-return-type */
    public function containsIterator(Iterator $iterator)
    {
    }
    /** @tentative-return-type */
    public function countIterators()
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function valid()
    {
    }
    /** @tentative-return-type */
    public function key()
    {
    }
    /** @tentative-return-type */
    public function current()
    {
    }
    /** @tentative-return-type */
    public function next()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::__debugInfo
     */
    public function __debugInfo()
    {
    }
}