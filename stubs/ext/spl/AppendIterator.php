<?php 

class AppendIterator extends \IteratorIterator
{
    public function __construct()
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function append(Iterator $iterator)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function append(Iterator $iterator) : void
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
    /** @return int|null */
    #[\Until('8.1')]
    public function getIteratorIndex()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getIteratorIndex() : ?int
    {
    }
    /** @return ArrayIterator */
    #[\Until('8.1')]
    public function getArrayIterator()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getArrayIterator() : ArrayIterator
    {
    }
}