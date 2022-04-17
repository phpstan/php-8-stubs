<?php 

class Reflection
{
    /** @return string[] */
    #[\Until('8.1')]
    public static function getModifierNames(int $modifiers)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getModifierNames(int $modifiers) : array
    {
    }
}