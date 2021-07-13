<?php 

interface RecursiveIterator extends \Iterator
{
    /** @return bool */
    public function hasChildren();
    /** @return RecursiveIterator|null */
    public function getChildren();
}