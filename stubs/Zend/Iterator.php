<?php 

interface Iterator extends \Traversable
{
    /** @return mixed */
    #[\Until('8.1')]
    public function current();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : mixed;
    /** @return void */
    #[\Until('8.1')]
    public function next();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next() : void;
    /** @return mixed */
    #[\Until('8.1')]
    public function key();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : mixed;
    /** @return bool */
    #[\Until('8.1')]
    public function valid();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function valid() : bool;
    /** @return void */
    #[\Until('8.1')]
    public function rewind();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rewind() : void;
}