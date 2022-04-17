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
    /** @tentative-return-type */
    public function getName()
    {
    }
    /** @tentative-return-type */
    public function isPassedByReference()
    {
    }
    /** @tentative-return-type */
    public function canBePassedByValue()
    {
    }
    /** @tentative-return-type */
    public function getDeclaringFunction()
    {
    }
    /** @tentative-return-type */
    public function getDeclaringClass()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated Use ReflectionParameter::getType() instead
     */
    public function getClass()
    {
    }
    /** @tentative-return-type */
    public function hasType()
    {
    }
    /** @tentative-return-type */
    public function getType()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated Use ReflectionParameter::getType() instead
     */
    public function isArray()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated Use ReflectionParameter::getType() instead
     */
    public function isCallable()
    {
    }
    /** @tentative-return-type */
    public function allowsNull()
    {
    }
    /** @tentative-return-type */
    public function getPosition()
    {
    }
    /** @tentative-return-type */
    public function isOptional()
    {
    }
    /** @tentative-return-type */
    public function isDefaultValueAvailable()
    {
    }
    /** @tentative-return-type */
    public function getDefaultValue()
    {
    }
    /** @tentative-return-type */
    public function isDefaultValueConstant()
    {
    }
    /** @tentative-return-type */
    public function getDefaultValueConstantName()
    {
    }
    /** @tentative-return-type */
    public function isVariadic()
    {
    }
    public function isPromoted() : bool
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}