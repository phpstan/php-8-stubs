<?php 

#[\Since('8.1')]
final class ZendTestParameterAttribute
{
    public string $parameter;
    public function __construct(string $parameter)
    {
    }
}