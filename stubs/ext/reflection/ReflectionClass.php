<?php 

/** @not-serializable */
class ReflectionClass implements \Reflector
{
    #[\Until('8.1')]
    private final function __clone() : void
    {
    }
    #[\Since('8.1')]
    private function __clone() : void
    {
    }
    public function __construct(object|string $objectOrClass)
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
    public function isInternal()
    {
    }
    /** @tentative-return-type */
    public function isUserDefined()
    {
    }
    /** @tentative-return-type */
    public function isAnonymous()
    {
    }
    /** @tentative-return-type */
    public function isInstantiable()
    {
    }
    /** @tentative-return-type */
    public function isCloneable()
    {
    }
    /** @tentative-return-type */
    public function getFileName()
    {
    }
    /** @tentative-return-type */
    public function getStartLine()
    {
    }
    /** @tentative-return-type */
    public function getEndLine()
    {
    }
    /** @tentative-return-type */
    public function getDocComment()
    {
    }
    /** @tentative-return-type */
    public function getConstructor()
    {
    }
    /** @tentative-return-type */
    public function hasMethod(string $name)
    {
    }
    /** @tentative-return-type */
    public function getMethod(string $name)
    {
    }
    /** @tentative-return-type */
    public function getMethods(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    public function hasProperty(string $name)
    {
    }
    /** @tentative-return-type */
    public function getProperty(string $name)
    {
    }
    /** @tentative-return-type */
    public function getProperties(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    public function hasConstant(string $name)
    {
    }
    /** @tentative-return-type */
    public function getConstants(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    public function getReflectionConstants(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    public function getConstant(string $name)
    {
    }
    /** @tentative-return-type */
    public function getReflectionConstant(string $name)
    {
    }
    /** @tentative-return-type */
    public function getInterfaces()
    {
    }
    /** @tentative-return-type */
    public function getInterfaceNames()
    {
    }
    /** @tentative-return-type */
    public function isInterface()
    {
    }
    /** @tentative-return-type */
    public function getTraits()
    {
    }
    /** @tentative-return-type */
    public function getTraitNames()
    {
    }
    /** @tentative-return-type */
    public function getTraitAliases()
    {
    }
    /** @tentative-return-type */
    public function isTrait()
    {
    }
    /** @tentative-return-type */
    public function isAbstract()
    {
    }
    /** @tentative-return-type */
    public function isFinal()
    {
    }
    /** @tentative-return-type */
    public function getModifiers()
    {
    }
    /** @tentative-return-type */
    public function isInstance(object $object)
    {
    }
    /** @tentative-return-type */
    public function newInstance(mixed ...$args)
    {
    }
    /** @tentative-return-type */
    public function newInstanceWithoutConstructor()
    {
    }
    /** @tentative-return-type */
    public function newInstanceArgs(array $args = [])
    {
    }
    /** @tentative-return-type */
    public function getParentClass()
    {
    }
    /** @tentative-return-type */
    public function isSubclassOf(ReflectionClass|string $class)
    {
    }
    /** @tentative-return-type */
    public function getStaticProperties()
    {
    }
    /** @tentative-return-type */
    public function getStaticPropertyValue(string $name, mixed $default = UNKNOWN)
    {
    }
    /** @tentative-return-type */
    public function setStaticPropertyValue(string $name, mixed $value)
    {
    }
    /** @tentative-return-type */
    public function getDefaultProperties()
    {
    }
    /** @tentative-return-type */
    public function isIterable()
    {
    }
    /**
     * @tentative-return-type
     * @alias ReflectionClass::isIterable
     */
    public function isIterateable()
    {
    }
    /** @tentative-return-type */
    public function implementsInterface(ReflectionClass|string $interface)
    {
    }
    /** @tentative-return-type */
    public function getExtension()
    {
    }
    /** @tentative-return-type */
    public function getExtensionName()
    {
    }
    /** @tentative-return-type */
    public function inNamespace()
    {
    }
    /** @tentative-return-type */
    public function getNamespaceName()
    {
    }
    /** @tentative-return-type */
    public function getShortName()
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}