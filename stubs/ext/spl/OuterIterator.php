<?php 

interface OuterIterator extends \Iterator
{
    /** @tentative-return-type */
    public function getInnerIterator();
}