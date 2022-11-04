<?php 

#[\Attribute(Attribute::TARGET_PROPERTY)]
#[\Since('8.2')]
final class ZendTestPropertyAttribute
{
    public string $parameter;
    public function __construct(string $parameter)
    {
    }
}