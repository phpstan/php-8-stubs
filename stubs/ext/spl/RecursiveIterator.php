<?php 

interface RecursiveIterator extends \Iterator
{
    /** @tentative-return-type */
    public function hasChildren();
    /** @tentative-return-type */
    public function getChildren();
}