<?php 

class ReflectionFunction extends \ReflectionFunctionAbstract
{
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function isAnonymous(): bool
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function isAnonymous(): bool
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    #[\Until('8.4')]
    public function isDisabled()
    {
    }
    /**
     * @var int
     * @cvalue ZEND_ACC_DEPRECATED
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const IS_DEPRECATED = UNKNOWN;
    public function __construct(Closure|string $function)
    {
    }
    public function __toString(): string
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function isAnonymous(): bool
    {
    }
    #[\Since('8.5')]
    public function isAnonymous(): bool
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "as ReflectionFunction can no longer be constructed for disabled functions")]
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function isDisabled()
    {
    }
    /**
     * @tentative-return-type
     */
    #[\Deprecated(since: '8.0', message: "as ReflectionFunction can no longer be constructed for disabled functions")]
    #[\Since('8.5')]
    public function isDisabled()
    {
    }
    /**
     * @tentative-return-type
     * @return mixed
     */
    public function invoke(mixed ...$args)
    {
    }
    /**
     * @tentative-return-type
     * @return mixed
     */
    public function invokeArgs(array $args)
    {
    }
    /**
     * @tentative-return-type
     * @return Closure
     */
    public function getClosure()
    {
    }
    /** @cvalue ZEND_ACC_DEPRECATED */
    #[\Since('8.4')]
    public const int IS_DEPRECATED = UNKNOWN;
}