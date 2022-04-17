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
    /** @return string */
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
    public function getValue(?object $object = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getValue(?object $object = null) : mixed
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setValue(mixed $objectOrValue, mixed $value = UNKNOWN)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setValue(mixed $objectOrValue, mixed $value = UNKNOWN) : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isInitialized(?object $object = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isInitialized(?object $object = null) : bool
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
    /** @return bool */
    #[\Until('8.1')]
    public function isStatic()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isStatic() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDefault()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDefault() : bool
    {
    }
    public function isPromoted() : bool
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
    /** @return void */
    #[\Until('8.1')]
    public function setAccessible(bool $accessible)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setAccessible(bool $accessible) : void
    {
    }
    /** @return ReflectionType|null */
    #[\Until('8.1')]
    public function getType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getType() : ?ReflectionType
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasType() : bool
    {
    }
    public function hasDefaultValue() : bool
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getDefaultValue()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDefaultValue() : mixed
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}