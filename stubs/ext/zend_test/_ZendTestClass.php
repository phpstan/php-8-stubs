<?php 

/** @alias _ZendTestClassAlias */
class _ZendTestClass implements \_ZendTestInterface
{
    public static function is_object() : int
    {
    }
    /**
     * @deprecated
     * @return string
     */
    public function __toString()
    {
    }
    public function returnsStatic() : static
    {
    }
}