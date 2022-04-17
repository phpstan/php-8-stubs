<?php 

/** @generate-class-entries */
class SplFixedArray implements \IteratorAggregate, \ArrayAccess, \Countable, \JsonSerializable
{
    public function __construct(int $size = 0)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function __wakeup()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __wakeup() : void
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
    /** @return array */
    #[\Until('8.1')]
    public function toArray()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function toArray() : array
    {
    }
    /** @return SplFixedArray */
    #[\Until('8.1')]
    public static function fromArray(array $array, bool $preserveKeys = true)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function fromArray(array $array, bool $preserveKeys = true) : SplFixedArray
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getSize()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSize() : int
    {
    }
    /** @return bool */
    public function setSize(int $size)
    {
    }
    /**
     * @param int $index
     * @return bool
     */
    #[\Until('8.1')]
    public function offsetExists($index)
    {
    }
    // TODO make return type void
    /**
     * @param int $index
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetExists($index) : bool
    {
    }
    /**
     * @param int $index
     * @return mixed
     */
    #[\Until('8.1')]
    public function offsetGet($index)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetGet($index) : mixed
    {
    }
    /**
     * @param int $index
     * @return void
     */
    #[\Until('8.1')]
    public function offsetSet($index, mixed $value)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetSet($index, mixed $value) : void
    {
    }
    /**
     * @param int $index
     * @return void
     */
    #[\Until('8.1')]
    public function offsetUnset($index)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetUnset($index) : void
    {
    }
    public function getIterator() : Iterator
    {
    }
}