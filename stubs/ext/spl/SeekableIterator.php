<?php 

interface SeekableIterator extends \Iterator
{
    /** @return void */
    #[\Until('8.1')]
    public function seek(int $offset);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function seek(int $offset) : void;
}