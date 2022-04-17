<?php 

interface IteratorAggregate extends \Traversable
{
    /** @tentative-return-type */
    public function getIterator();
}