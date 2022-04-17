<?php 

interface OuterIterator extends \Iterator
{
    /** @return Iterator|null */
    #[\Until('8.1')]
    public function getInnerIterator();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getInnerIterator() : ?Iterator;
}