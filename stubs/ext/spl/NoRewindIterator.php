<?php 

class NoRewindIterator extends \IteratorIterator
{
    public function __construct(Iterator $iterator)
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
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : mixed
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
}