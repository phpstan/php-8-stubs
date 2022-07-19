<?php 

class _ZendTestChildClass extends \_ZendTestClass
{
    #[\Since('8.1')]
    public function returnsThrowable() : Exception
    {
    }
}