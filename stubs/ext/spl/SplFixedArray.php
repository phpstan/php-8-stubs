<?php 

/** @generate-function-entries */
class SplFixedArray implements \IteratorAggregate, \ArrayAccess, \Countable
{
    #[\Since('8.1')]
    #[\Until('8.2')]
    public function jsonSerialize(): array
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function __serialize(): array
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function __unserialize(array $data): void
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function jsonSerialize(): array
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    #[\Until('8.4')]
    public function __wakeup()
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function __serialize(): array
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function __unserialize(array $data): void
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function jsonSerialize(): array
    {
    }
    public function __construct(int $size = 0)
    {
    }
    /** @tentative-return-type */
    #[\Deprecated(since: '8.4', message: 'this method is obsolete, as serialization hooks are provided by __unserialize() and __serialize()')]
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __wakeup()
    {
    }
    /** @tentative-return-type */
    #[\Deprecated(since: '8.4', message: 'this method is obsolete, as serialization hooks are provided by __unserialize() and __serialize()')]
    #[\Since('8.5')]
    public function __wakeup()
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __serialize(): array
    {
    }
    #[\Since('8.5')]
    public function __serialize(): array
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __unserialize(array $data): void
    {
    }
    #[\Since('8.5')]
    public function __unserialize(array $data): void
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function count()
    {
    }
    /**
     * @tentative-return-type
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * @tentative-return-type
     * @return SplFixedArray
     */
    public static function fromArray(array $array, bool $preserveKeys = true)
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function getSize()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function setSize(int $size)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     * @return bool
     */
    public function offsetExists($index)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     * @return mixed
     */
    public function offsetGet($index)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     * @return void
     */
    public function offsetSet($index, mixed $value)
    {
    }
    /**
     * @param int $index
     * @tentative-return-type
     * @return void
     */
    public function offsetUnset($index)
    {
    }
    public function getIterator(): Iterator
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function jsonSerialize(): array
    {
    }
    /**
     * @implementation-alias SplFixedArray::toArray
     */
    #[\Since('8.5')]
    public function jsonSerialize(): array
    {
    }
}