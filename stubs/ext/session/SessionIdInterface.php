<?php 

interface SessionIdInterface
{
    /** @return string */
    #[\Until('8.1')]
    public function create_sid();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function create_sid() : string;
}