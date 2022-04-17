<?php 

class ArrayIterator implements \SeekableIterator, \ArrayAccess, \Serializable, \Countable
{
    public function __construct(array|object $array = [], int $flags = 0)
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::offsetExists
     */
    #[\Until('8.1')]
    public function offsetExists(mixed $key)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetExists
     */
    #[\Since('8.1')]
    public function offsetExists(mixed $key) : bool
    {
    }
    /**
     * @return mixed
     * @implementation-alias ArrayObject::offsetGet
     */
    #[\Until('8.1')]
    public function offsetGet(mixed $key)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetGet
     */
    #[\Since('8.1')]
    public function offsetGet(mixed $key) : mixed
    {
    }
    /**
     * @return void
     * @implementation-alias ArrayObject::offsetSet
     */
    #[\Until('8.1')]
    public function offsetSet(mixed $key, mixed $value)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetSet
     */
    #[\Since('8.1')]
    public function offsetSet(mixed $key, mixed $value) : void
    {
    }
    /**
     * @return void
     * @implementation-alias ArrayObject::offsetUnset
     */
    #[\Until('8.1')]
    public function offsetUnset(mixed $key)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::offsetUnset
     */
    #[\Since('8.1')]
    public function offsetUnset(mixed $key) : void
    {
    }
    /**
     * @return void
     * @implementation-alias ArrayObject::append
     */
    #[\Until('8.1')]
    public function append(mixed $value)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::append
     */
    #[\Since('8.1')]
    public function append(mixed $value) : void
    {
    }
    /**
     * @return array
     * @implementation-alias ArrayObject::getArrayCopy
     */
    #[\Until('8.1')]
    public function getArrayCopy()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::getArrayCopy
     */
    #[\Since('8.1')]
    public function getArrayCopy() : array
    {
    }
    /**
     * @return int
     * @implementation-alias ArrayObject::count
     */
    #[\Until('8.1')]
    public function count()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::count
     */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    /**
     * @return int
     * @implementation-alias ArrayObject::getFlags
     */
    #[\Until('8.1')]
    public function getFlags()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::getFlags
     */
    #[\Since('8.1')]
    public function getFlags() : int
    {
    }
    /**
     * @return void
     * @implementation-alias ArrayObject::setFlags
     */
    #[\Until('8.1')]
    public function setFlags(int $flags)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::setFlags
     */
    #[\Since('8.1')]
    public function setFlags(int $flags) : void
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::asort
     */
    #[\Until('8.1')]
    public function asort(int $flags = SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::asort
     */
    #[\Since('8.1')]
    public function asort(int $flags = SORT_REGULAR) : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::ksort
     */
    #[\Until('8.1')]
    public function ksort(int $flags = SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::ksort
     */
    #[\Since('8.1')]
    public function ksort(int $flags = SORT_REGULAR) : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::uasort
     */
    #[\Until('8.1')]
    public function uasort(callable $callback)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::uasort
     */
    #[\Since('8.1')]
    public function uasort(callable $callback) : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::uksort
     */
    #[\Until('8.1')]
    public function uksort(callable $callback)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::uksort
     */
    #[\Since('8.1')]
    public function uksort(callable $callback) : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::natsort
     */
    #[\Until('8.1')]
    public function natsort()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::natsort
     */
    #[\Since('8.1')]
    public function natsort() : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias ArrayObject::natcasesort
     */
    #[\Until('8.1')]
    public function natcasesort()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::natcasesort
     */
    #[\Since('8.1')]
    public function natcasesort() : bool
    {
    }
    /**
     * @return void
     * @implementation-alias ArrayObject::unserialize
     */
    #[\Until('8.1')]
    public function unserialize(string $data)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::unserialize
     */
    #[\Since('8.1')]
    public function unserialize(string $data) : void
    {
    }
    /**
     * @return string
     * @implementation-alias ArrayObject::serialize
     */
    #[\Until('8.1')]
    public function serialize()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::serialize
     */
    #[\Since('8.1')]
    public function serialize() : string
    {
    }
    /**
     * @return array
     * @implementation-alias ArrayObject::__serialize
     */
    #[\Until('8.1')]
    public function __serialize()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::__serialize
     */
    #[\Since('8.1')]
    public function __serialize() : array
    {
    }
    /**
     * @return void
     * @implementation-alias ArrayObject::__unserialize
     */
    #[\Until('8.1')]
    public function __unserialize(array $data)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::__unserialize
     */
    #[\Since('8.1')]
    public function __unserialize(array $data) : void
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
    /** @return mixed */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : string|int|null
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
    /** @return void */
    #[\Until('8.1')]
    public function seek(int $offset)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function seek(int $offset) : void
    {
    }
    /**
     * @return array
     * @implementation-alias ArrayObject::__debugInfo
     */
    #[\Until('8.1')]
    public function __debugInfo()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias ArrayObject::__debugInfo
     */
    #[\Since('8.1')]
    public function __debugInfo() : array
    {
    }
}