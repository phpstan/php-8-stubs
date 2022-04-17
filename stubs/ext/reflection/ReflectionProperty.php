<?php 

/** @not-serializable */
class ReflectionProperty implements \Reflector
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
    public function __construct(object|string $class, string $property)
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
    public function getValue(?object $object = null)
    {
    }
    /** @tentative-return-type */
    public function setValue(mixed $objectOrValue, mixed $value = UNKNOWN)
    {
    }
    /** @tentative-return-type */
    public function isInitialized(?object $object = null)
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
    public function isStatic()
    {
    }
    /** @tentative-return-type */
    public function isDefault()
    {
    }
    public function isPromoted() : bool
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
    /** @tentative-return-type */
    public function setAccessible(bool $accessible)
    {
    }
    /** @tentative-return-type */
    public function getType()
    {
    }
    /** @tentative-return-type */
    public function hasType()
    {
    }
    public function hasDefaultValue() : bool
    {
    }
    /** @tentative-return-type */
    public function getDefaultValue()
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}