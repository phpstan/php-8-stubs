<?php 

/** @not-serializable */
abstract class ReflectionType implements \Stringable
{
    /** @implementation-alias ReflectionClass::__clone */
    #[\Until('8.1')]
    private final function __clone() : void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.1')]
    private function __clone() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function allowsNull()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function allowsNull() : bool
    {
    }
    public function __toString() : string
    {
    }
}