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
    /** @return string|false */
    #[\Until('8.1')]
    public function getName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getName() : string
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getValue()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getValue() : mixed
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isPublic()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isPublic() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isPrivate()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isPrivate() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isProtected()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isProtected() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getModifiers()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getModifiers() : int
    {
    }
    /** @return ReflectionClass */
    #[\Until('8.1')]
    public function getDeclaringClass()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDeclaringClass() : ReflectionClass
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getDocComment()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDocComment() : string|false
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}