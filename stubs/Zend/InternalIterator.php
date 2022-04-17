<?php 

/**
 * @not-serializable
 */
final class InternalIterator implements \Iterator
{
    private function __construct()
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function current();
    #[\Since('8.1')]
    public function current() : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function key();
    #[\Since('8.1')]
    public function key() : mixed
    {
    }
    public function next() : void
    {
    }
    public function valid() : bool
    {
    }
    public function rewind() : void
    {
    }
}