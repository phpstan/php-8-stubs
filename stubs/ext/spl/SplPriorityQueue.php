<?php 

/** @generate-class-entries */
class SplPriorityQueue implements \Iterator, \Countable
{
    /** @return int */
    #[\Until('8.1')]
    public function compare(mixed $priority1, mixed $priority2)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function compare(mixed $priority1, mixed $priority2) : int
    {
    }
    /** @return bool */
    public function insert(mixed $value, mixed $priority)
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function setExtractFlags(int $flags)
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setExtractFlags(int $flags) : int
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function top()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function top() : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function extract()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function extract() : mixed
    {
    }
    /**
     * @return int
     * @implementation-alias SplHeap::count
     */
    #[\Until('8.1')]
    public function count()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::count
     */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    /**
     * @return bool
     * @implementation-alias SplHeap::isEmpty
     */
    #[\Until('8.1')]
    public function isEmpty()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::isEmpty
     */
    #[\Since('8.1')]
    public function isEmpty() : bool
    {
    }
    /**
     * @return void
     * @implementation-alias SplHeap::rewind
     */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::rewind
     */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : mixed
    {
    }
    /**
     * @return int
     * @implementation-alias SplHeap::key
     */
    #[\Until('8.1')]
    public function key()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::key
     */
    #[\Since('8.1')]
    public function key() : int
    {
    }
    /**
     * @return void
     * @implementation-alias SplHeap::next
     */
    #[\Until('8.1')]
    public function next()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::next
     */
    #[\Since('8.1')]
    public function next() : void
    {
    }
    /**
     * @return bool
     * @implementation-alias SplHeap::valid
     */
    #[\Until('8.1')]
    public function valid()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::valid
     */
    #[\Since('8.1')]
    public function valid() : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias SplHeap::recoverFromCorruption
     */
    public function recoverFromCorruption()
    {
    }
    /**
     * @return bool
     * @implementation-alias SplHeap::isCorrupted
     */
    #[\Until('8.1')]
    public function isCorrupted()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias SplHeap::isCorrupted
     */
    #[\Since('8.1')]
    public function isCorrupted() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getExtractFlags()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExtractFlags() : int
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function __debugInfo()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __debugInfo() : array
    {
    }
}