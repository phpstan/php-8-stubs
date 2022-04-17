<?php 

class ReflectionMethod extends \ReflectionFunctionAbstract
{
    public function __construct(object|string $objectOrMethod, ?string $method = null)
    {
    }
    public function __toString() : string
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
    public function isAbstract()
    {
    }
    /** @tentative-return-type */
    public function isFinal()
    {
    }
    /** @tentative-return-type */
    public function isConstructor()
    {
    }
    /** @tentative-return-type */
    public function isDestructor()
    {
    }
    /** @tentative-return-type */
    public function getClosure(?object $object = null)
    {
    }
    /** @tentative-return-type */
    public function getModifiers()
    {
    }
    /** @tentative-return-type */
    public function invoke(?object $object, mixed ...$args)
    {
    }
    /** @tentative-return-type */
    public function invokeArgs(?object $object, array $args)
    {
    }
    /** @tentative-return-type */
    public function getDeclaringClass()
    {
    }
    /** @tentative-return-type */
    public function getPrototype()
    {
    }
    /** @tentative-return-type */
    public function setAccessible(bool $accessible)
    {
    }
}