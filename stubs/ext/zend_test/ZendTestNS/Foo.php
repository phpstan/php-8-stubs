<?php 

namespace ZendTestNS;

class Foo
{
    #[\Until('8.2')]
    public function method() : void
    {
    }
    /** @tentative-return-type */
    #[\Since('8.2')]
    public function method() : int
    {
    }
}