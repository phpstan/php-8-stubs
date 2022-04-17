<?php 

/** @not-serializable */
class ReflectionClassConstant implements \Reflector
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
    public function __construct(object|string $class, string $constant)
    {
    }
    public function __toString() : string
    {
    }
    /** @tentative-return-type */
    public function getName()
    {
    }
    /** @tentative-return-type */
    public function getValue()
    {
    }
    /** @tentative-return-type */
    public function isPublic()
    {
    }
    /** @tentative-return-type */
    public function isPrivate()
    {
    }
    /** @tentative-return-type */
    public function isProtected()
    {
    }
    /** @tentative-return-type */
    public function getModifiers()
    {
    }
    /** @tentative-return-type */
    public function getDeclaringClass()
    {
    }
    /** @tentative-return-type */
    public function getDocComment()
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}