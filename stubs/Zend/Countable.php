<?php 

interface Countable
{
    /** @return int */
    #[\Until('8.1')]
    public function count();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count() : int;
}