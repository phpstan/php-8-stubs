<?php 

class ReflectionFunction extends \ReflectionFunctionAbstract
{
    public function __construct(Closure|string $function)
    {
    }
    public function __toString() : string
    {
    }
    /**
     * @return bool
     * @deprecated ReflectionFunction can no longer be constructed for disabled functions
     */
    #[\Until('8.1')]
    public function isDisabled()
    {
    }
    /**
     * @tentative-return-type
     * @deprecated ReflectionFunction can no longer be constructed for disabled functions
     */
    #[\Since('8.1')]
    public function isDisabled() : bool
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function invoke(mixed ...$args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function invoke(mixed ...$args) : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function invokeArgs(array $args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function invokeArgs(array $args) : mixed
    {
    }
    /** @return Closure */
    #[\Until('8.1')]
    public function getClosure()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getClosure() : Closure
    {
    }
}