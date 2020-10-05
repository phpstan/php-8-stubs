<?php 

/** @generate-function-entries */
class ArrayObject implements \IteratorAggregate, \ArrayAccess, \Serializable, \Countable
{
    public function __construct(array|object $input = [], int $flags = 0, string $iterator_class = ArrayIterator::class)
    {
    }
    /**
     * @param string|int $index
     * @return bool
     */
    public function offsetExists($index)
    {
    }
    /**
     * @param string|int $index
     * @return mixed
     */
    public function offsetGet($index)
    {
    }
    /**
     * @param string|int $index
     * @return void
     */
    public function offsetSet($index, mixed $value)
    {
    }
    /**
     * @param string|int $index
     * @return void
     */
    public function offsetUnset($index)
    {
    }
    /** @return void */
    public function append(mixed $value)
    {
    }
    /** @return array */
    public function getArrayCopy()
    {
    }
    /** @return int */
    public function count()
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
    /** @return bool */
    public function asort(int $sort_flags = SORT_REGULAR)
    {
    }
    /** @return bool */
    public function ksort(int $sort_flags = SORT_REGULAR)
    {
    }
    /** @return bool */
    public function uasort(callable $cmp_function)
    {
    }
    /** @return bool */
    public function uksort(callable $cmp_function)
    {
    }
    /** @return bool */
    public function natsort()
    {
    }
    /** @return bool */
    public function natcasesort()
    {
    }
    /** @return void */
    public function unserialize(string $serialized)
    {
    }
    /** @return string */
    public function serialize()
    {
    }
    /** @return array */
    public function __serialize()
    {
    }
    /** @return void */
    public function __unserialize(array $data)
    {
    }
    /** @return Iterator */
    public function getIterator()
    {
    }
    /** @return array|null */
    public function exchangeArray(array|object $input)
    {
    }
    /** @return void */
    public function setIteratorClass(string $iteratorClass)
    {
    }
    /** @return string */
    public function getIteratorClass()
    {
    }
    /** @return array */
    public function __debugInfo()
    {
    }
}