<?php 

interface OuterIterator extends \Iterator
{
    /** @return Iterator|null */
    public function getInnerIterator();
}