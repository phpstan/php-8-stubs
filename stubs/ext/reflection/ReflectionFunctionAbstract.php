<?php 

/** @not-serializable */
abstract class ReflectionFunctionAbstract implements \Reflector
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
    /** @return bool */
    #[\Until('8.1')]
    public function isClosure()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isClosure() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDeprecated()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDeprecated() : bool
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
    public function isGenerator()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isGenerator() : bool
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
    /** @return object|null */
    #[\Until('8.1')]
    public function getClosureThis()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getClosureThis() : ?object
    {
    }
    /** @return ReflectionClass|null */
    #[\Until('8.1')]
    public function getClosureScopeClass()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getClosureScopeClass() : ?ReflectionClass
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
    /** @return int */
    #[\Until('8.1')]
    public function getNumberOfParameters()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNumberOfParameters() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getNumberOfRequiredParameters()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNumberOfRequiredParameters() : int
    {
    }
    /** @return ReflectionParameter[] */
    #[\Until('8.1')]
    public function getParameters()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getParameters() : array
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
    /** @return array */
    #[\Until('8.1')]
    public function getStaticVariables()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStaticVariables() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function returnsReference()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function returnsReference() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasReturnType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasReturnType() : bool
    {
    }
    /** @return ReflectionType|null */
    #[\Until('8.1')]
    public function getReturnType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getReturnType() : ?ReflectionType
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}