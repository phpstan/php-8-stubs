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
     * @tentative-return-type
     * @deprecated ReflectionFunction can no longer be constructed for disabled functions
     */
    public function isDisabled()
    {
    }
    /** @tentative-return-type */
    public function invoke(mixed ...$args)
    {
    }
    /** @tentative-return-type */
    public function invokeArgs(array $args)
    {
    }
    /** @tentative-return-type */
    public function getClosure()
    {
    }
}