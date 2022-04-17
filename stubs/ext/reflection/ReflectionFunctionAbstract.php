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
    /** @tentative-return-type */
    public function inNamespace()
    {
    }
    /** @tentative-return-type */
    public function isClosure()
    {
    }
    /** @tentative-return-type */
    public function isDeprecated()
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
    public function isGenerator()
    {
    }
    /** @tentative-return-type */
    public function isVariadic()
    {
    }
    /** @tentative-return-type */
    public function getClosureThis()
    {
    }
    /** @tentative-return-type */
    public function getClosureScopeClass()
    {
    }
    /** @tentative-return-type */
    public function getDocComment()
    {
    }
    /** @tentative-return-type */
    public function getEndLine()
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
    public function getFileName()
    {
    }
    /** @tentative-return-type */
    public function getName()
    {
    }
    /** @tentative-return-type */
    public function getNamespaceName()
    {
    }
    /** @tentative-return-type */
    public function getNumberOfParameters()
    {
    }
    /** @tentative-return-type */
    public function getNumberOfRequiredParameters()
    {
    }
    /** @tentative-return-type */
    public function getParameters()
    {
    }
    /** @tentative-return-type */
    public function getShortName()
    {
    }
    /** @tentative-return-type */
    public function getStartLine()
    {
    }
    /** @tentative-return-type */
    public function getStaticVariables()
    {
    }
    /** @tentative-return-type */
    public function returnsReference()
    {
    }
    /** @tentative-return-type */
    public function hasReturnType()
    {
    }
    /** @tentative-return-type */
    public function getReturnType()
    {
    }
    public function getAttributes(?string $name = null, int $flags = 0) : array
    {
    }
}