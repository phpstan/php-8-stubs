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
    public function isInternal()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isInternal() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isUserDefined()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isUserDefined() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isAnonymous()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isAnonymous() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isInstantiable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isInstantiable() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isCloneable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isCloneable() : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getFileName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFileName() : string|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getStartLine()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStartLine() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getEndLine()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getEndLine() : int|false
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
    /** @return ReflectionMethod|null */
    #[\Until('8.1')]
    public function getConstructor()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getConstructor() : ?ReflectionMethod
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasMethod(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasMethod(string $name) : bool
    {
    }
    /** @return ReflectionMethod */
    #[\Until('8.1')]
    public function getMethod(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMethod(string $name) : ReflectionMethod
    {
    }
    /** @return ReflectionMethod[] */
    #[\Until('8.1')]
    public function getMethods(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMethods(?int $filter = null) : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasProperty(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasProperty(string $name) : bool
    {
    }
    /** @return ReflectionProperty */
    #[\Until('8.1')]
    public function getProperty(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getProperty(string $name) : ReflectionProperty
    {
    }
    /** @return ReflectionProperty[] */
    #[\Until('8.1')]
    public function getProperties(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getProperties(?int $filter = null) : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasConstant(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasConstant(string $name) : bool
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getConstants(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getConstants(?int $filter = null) : array
    {
    }
    /** @return ReflectionClassConstant[] */
    #[\Until('8.1')]
    public function getReflectionConstants(?int $filter = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getReflectionConstants(?int $filter = null) : array
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getConstant(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getConstant(string $name) : mixed
    {
    }
    /** @return ReflectionClassConstant|false */
    #[\Until('8.1')]
    public function getReflectionConstant(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getReflectionConstant(string $name) : ReflectionClassConstant|false
    {
    }
    /** @return ReflectionClass[] */
    #[\Until('8.1')]
    public function getInterfaces()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getInterfaces() : array
    {
    }
    /** @return string[] */
    #[\Until('8.1')]
    public function getInterfaceNames()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getInterfaceNames() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isInterface()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isInterface() : bool
    {
    }
    /** @return ReflectionClass[] */
    #[\Until('8.1')]
    public function getTraits()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getTraits() : array
    {
    }
    /** @return string[] */
    #[\Until('8.1')]
    public function getTraitNames()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getTraitNames() : array
    {
    }
    /** @return string[] */
    #[\Until('8.1')]
    public function getTraitAliases()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getTraitAliases() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isTrait()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isTrait() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isAbstract()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isAbstract() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isFinal()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isFinal() : bool
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
    /** @return bool */
    #[\Until('8.1')]
    public function isInstance(object $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isInstance(object $object) : bool
    {
    }
    /** @return object */
    #[\Until('8.1')]
    public function newInstance(mixed ...$args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function newInstance(mixed ...$args) : object
    {
    }
    /** @return object */
    #[\Until('8.1')]
    public function newInstanceWithoutConstructor()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function newInstanceWithoutConstructor() : object
    {
    }
    /** @return object */
    #[\Until('8.1')]
    public function newInstanceArgs(array $args = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function newInstanceArgs(array $args = []) : ?object
    {
    }
    /** @return ReflectionClass|false */
    #[\Until('8.1')]
    public function getParentClass()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getParentClass() : ReflectionClass|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isSubclassOf(ReflectionClass|string $class)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isSubclassOf(ReflectionClass|string $class) : bool
    {
    }
    /** @return array|null */
    #[\Until('8.1')]
    public function getStaticProperties()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStaticProperties() : ?array
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getStaticPropertyValue(string $name, mixed $default = UNKNOWN)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStaticPropertyValue(string $name, mixed $default = UNKNOWN) : mixed
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setStaticPropertyValue(string $name, mixed $value)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setStaticPropertyValue(string $name, mixed $value) : void
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getDefaultProperties()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDefaultProperties() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isIterable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isIterable() : bool
    {
    }
    /**
     * @return bool
     * @alias ReflectionClass::isIterable
     */
    #[\Until('8.1')]
    public function isIterateable()
    {
    }
    /**
     * @tentative-return-type
     * @alias ReflectionClass::isIterable
     */
    #[\Since('8.1')]
    public function isIterateable() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function implementsInterface(ReflectionClass|string $interface)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function implementsInterface(ReflectionClass|string $interface) : bool
    {
    }
    /** @return ReflectionExtension|null */
    #[\Until('8.1')]
    public function getExtension()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExtension() : ?ReflectionExtension
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getExtensionName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExtensionName() : string|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function inNamespace()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function inNamespace() : bool
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getNamespaceName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNamespaceName() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getShortName()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getShortName() : string
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}