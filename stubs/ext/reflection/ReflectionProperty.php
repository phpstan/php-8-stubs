<?php 

class ReflectionProperty implements \Reflector
{
    /** @implementation-alias ReflectionClass::__clone */
    #[\Until('8.1')]
    final private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.1')]
    private function __clone(): void
    {
    }
    public function __construct(object|string $class, string $property)
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
     * @return mixed
     */
    public function getValue(?object $object = null)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setValue(mixed $objectOrValue, mixed $value = UNKNOWN)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isInitialized(?object $object = null)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isPublic()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isPrivate()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isProtected()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isStatic()
    {
    }
    #[\Since('8.1')]
    public function isReadOnly(): bool
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isDefault()
    {
    }
    public function isPromoted(): bool
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function getModifiers()
    {
    }
    /**
     * @tentative-return-type
     * @return ReflectionClass
     */
    public function getDeclaringClass()
    {
    }
    /**
     * @tentative-return-type
     * @return (string | false)
     */
    public function getDocComment()
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setAccessible(bool $accessible)
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
     * @return bool
     */
    public function hasType()
    {
    }
    public function hasDefaultValue(): bool
    {
    }
    /**
     * @tentative-return-type
     * @return mixed
     */
    public function getDefaultValue()
    {
    }
    /** @return ReflectionAttribute[] */
    public function getAttributes(?string $name = null, int $flags = 0): array
    {
    }
    /**
     * @var int
     * @cvalue ZEND_ACC_STATIC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const IS_STATIC = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_STATIC
     */
    #[\Since('8.3')]
    public const IS_STATIC = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_READONLY
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const IS_READONLY = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_READONLY
     */
    #[\Since('8.3')]
    public const IS_READONLY = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_PUBLIC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const IS_PUBLIC = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_PUBLIC
     */
    #[\Since('8.3')]
    public const IS_PUBLIC = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_PROTECTED
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const IS_PROTECTED = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_PROTECTED
     */
    #[\Since('8.3')]
    public const IS_PROTECTED = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_PRIVATE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const IS_PRIVATE = UNKNOWN;
    /**
     * @var int
     * @cvalue ZEND_ACC_PRIVATE
     */
    #[\Since('8.3')]
    public const IS_PRIVATE = UNKNOWN;
}