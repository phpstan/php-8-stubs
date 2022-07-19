<?php 

/** @alias _ZendTestClassAlias */
class _ZendTestClass
{
    public static function is_object() : int
    {
    }
    /**
     * @deprecated
     * @return string
     */
    #[\Until('8.2')]
    public function __toString()
    {
    }
    /** @deprecated */
    #[\Since('8.2')]
    public function __toString() : string
    {
    }
    public function returnsStatic() : static
    {
    }
    #[\Since('8.1')]
    public function returnsThrowable() : Throwable
    {
    }
}