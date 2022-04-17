<?php 

abstract class SplHeap implements \Iterator, \Countable
{
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
    /** @return bool */
    #[\Until('8.1')]
    public function insert(mixed $value)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function insert(mixed $value) : bool
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
    /** @return int */
    #[\Until('8.1')]
    public function count()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isEmpty()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isEmpty() : bool
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
    /** @return int */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : int
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
    /** @return bool */
    #[\Until('8.1')]
    public function recoverFromCorruption()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function recoverFromCorruption() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    protected abstract function compare(mixed $value1, mixed $value2);
    /** @tentative-return-type */
    #[\Since('8.1')]
    protected abstract function compare(mixed $value1, mixed $value2) : int;
    /** @return bool */
    #[\Until('8.1')]
    public function isCorrupted()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isCorrupted() : bool
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