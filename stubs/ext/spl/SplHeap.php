<?php 

abstract class SplHeap implements \Iterator, \Countable
{
    /** @tentative-return-type */
    public function extract()
    {
    }
    /** @tentative-return-type */
    public function insert(mixed $value)
    {
    }
    /** @tentative-return-type */
    public function top()
    {
    }
    /** @tentative-return-type */
    public function count()
    {
    }
    /** @tentative-return-type */
    public function isEmpty()
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function current()
    {
    }
    /** @tentative-return-type */
    public function key()
    {
    }
    /** @tentative-return-type */
    public function next()
    {
    }
    /** @tentative-return-type */
    public function valid()
    {
    }
    /** @tentative-return-type */
    public function recoverFromCorruption()
    {
    }
    /** @tentative-return-type */
    protected abstract function compare(mixed $value1, mixed $value2);
    /** @tentative-return-type */
    public function isCorrupted()
    {
    }
    /** @tentative-return-type */
    public function __debugInfo()
    {
    }
}