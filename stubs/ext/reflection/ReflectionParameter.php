<?php 

class ReflectionParameter implements \Reflector
{
    /** @implementation-alias ReflectionClass::__clone */
    #[\Until('8.1')]
    final private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.1')]
    #[\Until('8.2')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.2')]
    #[\Until('8.3')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.3')]
    #[\Until('8.4')]
    private function __clone(): void
    {
    }
    /**
     * @tentative-return-type
     * @return (ReflectionClass | null)
     */
    #[\Until('8.4')]
    public function getClass()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    #[\Until('8.4')]
    public function isArray()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    #[\Until('8.4')]
    public function isCallable()
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.4')]
    #[\Until('8.5')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.5')]
    private function __clone(): void
    {
    }
    /** @param string|array|object $function */
    public function __construct($function, int|string $param)
    {
    }
    public function __toString(): string
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isPassedByReference()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function canBePassedByValue()
    {
    }
    /**
     * @tentative-return-type
     * @return ReflectionFunctionAbstract
     */
    public function getDeclaringFunction()
    {
    }
    /**
     * @tentative-return-type
     * @return (ReflectionClass | null)
     */
    public function getDeclaringClass()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "use ReflectionParameter::getType() instead")]
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getClass()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "use ReflectionParameter::getType() instead")]
    #[\Since('8.5')]
    public function getClass()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasType()
    {
    }
    /**
     * @tentative-return-type
     * @return (ReflectionType | null)
     */
    public function getType()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "use ReflectionParameter::getType() instead")]
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function isArray()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "use ReflectionParameter::getType() instead")]
    #[\Since('8.5')]
    public function isArray()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "use ReflectionParameter::getType() instead")]
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function isCallable()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "use ReflectionParameter::getType() instead")]
    #[\Since('8.5')]
    public function isCallable()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function allowsNull()
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function getPosition()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isOptional()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isDefaultValueAvailable()
    {
    }
    /**
     * @tentative-return-type
     * @return mixed
     */
    public function getDefaultValue()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isDefaultValueConstant()
    {
    }
    /**
     * @tentative-return-type
     * @return (string | null)
     */
    public function getDefaultValueConstantName()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isVariadic()
    {
    }
    public function isPromoted(): bool
    {
    }
    /** @return ReflectionAttribute[] */
    public function getAttributes(?string $name = null, int $flags = 0): array
    {
    }
}