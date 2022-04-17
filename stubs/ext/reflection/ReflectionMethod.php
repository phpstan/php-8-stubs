<?php 

class ReflectionMethod extends \ReflectionFunctionAbstract
{
    public function __construct(object|string $objectOrMethod, ?string $method = null)
    {
    }
    public function __toString() : string
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
    /** @return bool */
    #[\Until('8.1')]
    public function isConstructor()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isConstructor() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDestructor()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDestructor() : bool
    {
    }
    /** @return Closure */
    #[\Until('8.1')]
    public function getClosure(?object $object = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getClosure(?object $object = null) : Closure
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
    /** @return mixed */
    #[\Until('8.1')]
    public function invoke(?object $object, mixed ...$args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function invoke(?object $object, mixed ...$args) : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function invokeArgs(?object $object, array $args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function invokeArgs(?object $object, array $args) : mixed
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
    /** @return ReflectionMethod */
    #[\Until('8.1')]
    public function getPrototype()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPrototype() : ReflectionMethod
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
}