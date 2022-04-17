<?php 

class SplObjectStorage implements \Countable, \Iterator, \Serializable, \ArrayAccess
{
    /** @tentative-return-type */
    public function attach(object $object, mixed $info = null)
    {
    }
    /** @tentative-return-type */
    public function detach(object $object)
    {
    }
    /** @tentative-return-type */
    public function contains(object $object)
    {
    }
    /** @tentative-return-type */
    public function addAll(SplObjectStorage $storage)
    {
    }
    /** @tentative-return-type */
    public function removeAll(SplObjectStorage $storage)
    {
    }
    /** @tentative-return-type */
    public function removeAllExcept(SplObjectStorage $storage)
    {
    }
    /** @tentative-return-type */
    public function getInfo()
    {
    }
    /** @tentative-return-type */
    public function setInfo(mixed $info)
    {
    }
    /** @tentative-return-type */
    public function count(int $mode = COUNT_NORMAL)
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
    public function key()
    {
    }
    /** @tentative-return-type */
    public function current()
    {
    }
    /** @tentative-return-type */
    public function next()
    {
    }
    /** @tentative-return-type */
    public function unserialize(string $data)
    {
    }
    /** @tentative-return-type */
    public function serialize()
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::contains
     * @no-verify Cannot specify arg type because ArrayAccess does not
     */
    public function offsetExists($object)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     */
    public function offsetGet($object)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::attach
     * @no-verify Cannot specify arg type because ArrayAccess does not
     */
    public function offsetSet($object, mixed $info = null)
    {
    }
    /**
     * @param object $object
     * @tentative-return-type
     * @implementation-alias SplObjectStorage::detach
     * @no-verify Cannot specify arg type because ArrayAccess does not
     */
    public function offsetUnset($object)
    {
    }
    /** @tentative-return-type */
    public function getHash(object $object)
    {
    }
    /** @tentative-return-type */
    public function __serialize()
    {
    }
    /** @tentative-return-type */
    public function __unserialize(array $data)
    {
    }
    /** @tentative-return-type */
    public function __debugInfo()
    {
    }
}