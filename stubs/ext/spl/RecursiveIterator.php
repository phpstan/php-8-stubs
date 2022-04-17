<?php 

interface RecursiveIterator extends \Iterator
{
    /** @return bool */
    #[\Until('8.1')]
    public function hasChildren();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasChildren() : bool;
    /** @return RecursiveIterator|null */
    #[\Until('8.1')]
    public function getChildren();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : ?RecursiveIterator;
}