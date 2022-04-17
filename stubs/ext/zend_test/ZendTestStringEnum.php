<?php 

#[\Since('8.1')]
enum ZendTestStringEnum : string
{
    case Foo = "Test1";
    case Bar = "Test2";
    case Baz = "Test2\\a";
}