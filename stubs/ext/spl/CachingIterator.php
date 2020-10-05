<?php 

class CachingIterator extends \IteratorIterator implements \ArrayAccess, \Countable
{
    public function __construct(Iterator $iterator, int $flags = self::CALL_TOSTRING)
    {
    }
    /** @return void */
    public function rewind()
    {
    }
    /** @return bool */
    public function valid()
    {
    }
    /** @return void */
    public function next()
    {
    }
    /** @return bool */
    public function hasNext()
    {
    }
    public function __toString() : string
    {
    }
    /** @return int */
    public function getFlags()
    {
    }
    /** @return void */
    public function setFlags(int $flags)
    {
    }
    /**
     * @param string $index
     * @return mixed
     */
    public function offsetGet($index)
    {
    }
    /**
     * @param string $index
     * @return void
     */
    public function offsetSet($index, mixed $value)
    {
    }
    /**
     * @param string $index
     * @return void
     */
    public function offsetUnset($index)
    {
    }
    /**
     * @param string $index
     * @return bool
     */
    public function offsetExists($index)
    {
    }
    /** @return array */
    public function getCache()
    {
    }
    /** @return int */
    public function count()
    {
    }
}