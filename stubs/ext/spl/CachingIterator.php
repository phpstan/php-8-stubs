<?php 

class CachingIterator extends \IteratorIterator implements \ArrayAccess, \Countable, \Stringable
{
    public function __construct(Iterator $iterator, int $flags = CachingIterator::CALL_TOSTRING)
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
    public function next()
    {
    }
    /** @tentative-return-type */
    public function hasNext()
    {
    }
    public function __toString() : string
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
    /**
     * @param string $key
     * @tentative-return-type
     */
    public function offsetGet($key)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    public function offsetSet($key, mixed $value)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    public function offsetUnset($key)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    public function offsetExists($key)
    {
    }
    /** @tentative-return-type */
    public function getCache()
    {
    }
    /** @tentative-return-type */
    public function count()
    {
    }
}