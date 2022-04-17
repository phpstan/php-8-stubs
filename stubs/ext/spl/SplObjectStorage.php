<?php 

class SplObjectStorage implements \Countable, \Iterator, \Serializable, \ArrayAccess
{
    /** @return void */
    #[\Until('8.1')]
    public function attach(object $object, mixed $info = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function attach(object $object, mixed $info = null) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function detach(object $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function detach(object $object) : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function contains(object $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function contains(object $object) : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function addAll(SplObjectStorage $storage)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addAll(SplObjectStorage $storage) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function removeAll(SplObjectStorage $storage)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function removeAll(SplObjectStorage $storage) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function removeAllExcept(SplObjectStorage $storage)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function removeAllExcept(SplObjectStorage $storage) : int
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getInfo()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getInfo() : mixed
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setInfo(mixed $info)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setInfo(mixed $info) : void
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count(int $mode = COUNT_NORMAL) : int
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
    /** @return object|null */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : object
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
    /** @return void */
    #[\Until('8.1')]
    public function unserialize(string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function unserialize(string $data) : void
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function serialize()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function serialize() : string
    {
    }
    /**
     * @param object $object
     * @return bool
     * @implementation-alias SplObjectStorage::contains
     */
    #[\Until('8.1')]
    public function offsetExists($object)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::contains
     * @no-verify Cannot specify arg type because ArrayAccess does not
     */
    #[\Since('8.1')]
    public function offsetExists($object) : bool
    {
    }
    /**
     * @param object $object
     * @return mixed
     */
    #[\Until('8.1')]
    public function offsetGet($object)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetGet($object) : mixed
    {
    }
    /**
     * @param object $object
     * @return void
     * @implementation-alias SplObjectStorage::attach
     */
    #[\Until('8.1')]
    public function offsetSet($object, mixed $info = null)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::attach
     * @no-verify Cannot specify arg type because ArrayAccess does not
     */
    #[\Since('8.1')]
    public function offsetSet($object, mixed $info = null) : void
    {
    }
    /**
     * @param object $object
     * @return void
     * @implementation-alias SplObjectStorage::detach
     */
    #[\Until('8.1')]
    public function offsetUnset($object)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::detach
     * @no-verify Cannot specify arg type because ArrayAccess does not
     */
    #[\Since('8.1')]
    public function offsetUnset($object) : void
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getHash(object $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getHash(object $object) : string
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function __serialize()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __serialize() : array
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function __unserialize(array $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __unserialize(array $data) : void
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