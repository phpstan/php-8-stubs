<?php 

class MultipleIterator implements \Iterator
{
    public function __construct(int $flags = MultipleIterator::MIT_NEED_ALL | MultipleIterator::MIT_KEYS_NUMERIC)
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getFlags()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFlags() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setFlags(int $flags)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setFlags(int $flags) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function attachIterator(Iterator $iterator, string|int|null $info = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function attachIterator(Iterator $iterator, string|int|null $info = null) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function detachIterator(Iterator $iterator)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function detachIterator(Iterator $iterator) : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function containsIterator(Iterator $iterator)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function containsIterator(Iterator $iterator) : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function countIterators()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function countIterators() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function valid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function valid() : bool
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : array
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : array
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function next()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next() : void
    {
    }
    /**
     * @return array
     * @implementation-alias SplObjectStorage::__debugInfo
     */
    #[\Until('8.1')]
    public function __debugInfo()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::__debugInfo
     */
    #[\Since('8.1')]
    public function __debugInfo() : array
    {
    }
}