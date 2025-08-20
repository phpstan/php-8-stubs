<?php 

final class InternalIterator implements \Iterator
{
    /** @return mixed */
    #[\Until('8.1')]
    public function current();
    /** @return mixed */
    #[\Until('8.1')]
    public function key();
    #[\Since('8.1')]
    #[\Until('8.2')]
    public function current(): mixed
    {
    }
    #[\Since('8.1')]
    #[\Until('8.2')]
    public function key(): mixed
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function current(): mixed
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function key(): mixed
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function current(): mixed
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function key(): mixed
    {
    }
    private function __construct();
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function current(): mixed
    {
    }
    #[\Since('8.5')]
    public function current(): mixed
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function key(): mixed
    {
    }
    #[\Since('8.5')]
    public function key(): mixed
    {
    }
    public function next(): void;
    public function valid(): bool;
    public function rewind(): void;
}