<?php 

interface IteratorAggregate extends \Traversable
{
    /** @return Traversable */
    #[\Until('8.1')]
    public function getIterator();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getIterator() : Traversable;
}