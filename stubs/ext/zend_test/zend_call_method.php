<?php 

#[\Since('8.1')]
#[\Until('8.2')]
function zend_call_method(string $class, string $method, mixed $arg1 = UNKNOWN, mixed $arg2 = UNKNOWN) : mixed
{
}
#[\Since('8.2')]
function zend_call_method(object|string $obj_or_class, string $method, mixed $arg1 = UNKNOWN, mixed $arg2 = UNKNOWN) : mixed
{
}