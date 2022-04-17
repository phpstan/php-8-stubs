<?php 

interface Iterator extends \Traversable
{
    /** @tentative-return-type */
    public function current();
    /** @tentative-return-type */
    public function next();
    /** @tentative-return-type */
    public function key();
    /** @tentative-return-type */
    public function valid();
    /** @tentative-return-type */
    public function rewind();
}