<?php 

/** @not-serializable */
class ReflectionParameter implements \Reflector
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
    /** @param string|array|object $function */
    public function __construct($function, int|string $param)
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
    /** @return bool */
    #[\Until('8.1')]
    public function isPassedByReference()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isPassedByReference() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function canBePassedByValue()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function canBePassedByValue() : bool
    {
    }
    /** @return ReflectionFunctionAbstract */
    #[\Until('8.1')]
    public function getDeclaringFunction()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDeclaringFunction() : ReflectionFunctionAbstract
    {
    }
    /** @return ReflectionClass|null */
    #[\Until('8.1')]
    public function getDeclaringClass()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDeclaringClass() : ?ReflectionClass
    {
    }
    /**
     * @return ReflectionClass|null
     * @deprecated Use ReflectionParameter::getType() instead
     */
    #[\Until('8.1')]
    public function getClass()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated Use ReflectionParameter::getType() instead
     */
    #[\Since('8.1')]
    public function getClass() : ?ReflectionClass
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
    /**
     * @return bool
     * @deprecated Use ReflectionParameter::getType() instead
     */
    #[\Until('8.1')]
    public function isArray()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated Use ReflectionParameter::getType() instead
     */
    #[\Since('8.1')]
    public function isArray() : bool
    {
    }
    /**
     * @return bool
     * @deprecated Use ReflectionParameter::getType() instead
     */
    #[\Until('8.1')]
    public function isCallable()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated Use ReflectionParameter::getType() instead
     */
    #[\Since('8.1')]
    public function isCallable() : bool
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
    /** @return int */
    #[\Until('8.1')]
    public function getPosition()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPosition() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isOptional()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isOptional() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDefaultValueAvailable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDefaultValueAvailable() : bool
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
    /** @return bool */
    #[\Until('8.1')]
    public function isDefaultValueConstant()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDefaultValueConstant() : bool
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getDefaultValueConstantName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDefaultValueConstantName() : ?string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isVariadic()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isVariadic() : bool
    {
    }
    public function isPromoted() : bool
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}