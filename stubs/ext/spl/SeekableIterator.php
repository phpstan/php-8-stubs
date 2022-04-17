<?php 

interface SeekableIterator extends \Iterator
{
    /** @tentative-return-type */
    public function seek(int $offset);
}