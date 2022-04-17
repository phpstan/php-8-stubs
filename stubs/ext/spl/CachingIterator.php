<?php 

class CachingIterator extends \IteratorIterator implements \ArrayAccess, \Countable, \Stringable
{
    public function __construct(Iterator $iterator, int $flags = CachingIterator::CALL_TOSTRING)
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
    public function hasNext()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasNext() : bool
    {
    }
    public function __toString() : string
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
    /**
     * @param string $key
     * @return mixed
     */
    #[\Until('8.1')]
    public function offsetGet($key)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetGet($key) : mixed
    {
    }
    /**
     * @param string $key
     * @return void
     */
    #[\Until('8.1')]
    public function offsetSet($key, mixed $value)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetSet($key, mixed $value) : void
    {
    }
    /**
     * @param string $key
     * @return void
     */
    #[\Until('8.1')]
    public function offsetUnset($key)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetUnset($key) : void
    {
    }
    /**
     * @param string $key
     * @return bool
     */
    #[\Until('8.1')]
    public function offsetExists($key)
    {
    }
    /**
     * @param string $key
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetExists($key) : bool
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getCache()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCache() : array
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
}