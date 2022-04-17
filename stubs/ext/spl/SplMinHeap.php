<?php 

class SplMinHeap extends \SplHeap
{
    /** @return int */
    #[\Until('8.1')]
    protected function compare(mixed $value1, mixed $value2)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    protected function compare(mixed $value1, mixed $value2) : int
    {
    }
}