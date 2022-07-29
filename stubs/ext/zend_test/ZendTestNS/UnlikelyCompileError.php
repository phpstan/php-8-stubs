<?php 

namespace ZendTestNS;

#[\Since('8.2')]
class UnlikelyCompileError
{
    /* This method signature would create a compile error due to the string
     * "ZendTestNS\UnlikelyCompileError" in the generated macro call */
    public function method() : ?UnlikelyCompileError
    {
    }
}