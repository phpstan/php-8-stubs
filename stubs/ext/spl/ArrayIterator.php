<?php 

class ArrayIterator implements \SeekableIterator, \ArrayAccess, \Serializable, \Countable
{
    public function __construct(array|object $array = [], int $flags = 0)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetExists
     */
    public function offsetExists(mixed $key)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetGet
     */
    public function offsetGet(mixed $key)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetSet
     */
    public function offsetSet(mixed $key, mixed $value)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetUnset
     */
    public function offsetUnset(mixed $key)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::append
     */
    public function append(mixed $value)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::getArrayCopy
     */
    public function getArrayCopy()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::count
     */
    public function count()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::getFlags
     */
    public function getFlags()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::setFlags
     */
    public function setFlags(int $flags)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::asort
     */
    public function asort(int $flags = SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::ksort
     */
    public function ksort(int $flags = SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::uasort
     */
    public function uasort(callable $callback)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::uksort
     */
    public function uksort(callable $callback)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::natsort
     */
    public function natsort()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::natcasesort
     */
    public function natcasesort()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::unserialize
     */
    public function unserialize(string $data)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::serialize
     */
    public function serialize()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::__serialize
     */
    public function __serialize()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::__unserialize
     */
    public function __unserialize(array $data)
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
    public function seek(int $offset)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::__debugInfo
     */
    public function __debugInfo()
    {
    }
}