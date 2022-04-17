<?php 

#[\Since('8.1')]
class ZendTestClassWithMethodWithParameterAttribute
{
    public final function no_override(string $parameter) : int
    {
    }
    public function override(string $parameter) : int
    {
    }
}