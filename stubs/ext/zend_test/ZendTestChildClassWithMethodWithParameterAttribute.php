<?php 

#[\Since('8.1')]
class ZendTestChildClassWithMethodWithParameterAttribute extends \ZendTestClassWithMethodWithParameterAttribute
{
    public function override(string $parameter) : int
    {
    }
}