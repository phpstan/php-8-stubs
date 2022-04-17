<?php 

class ReflectionNamedType extends \ReflectionType
{
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
    /** @return bool */
    #[\Until('8.1')]
    public function isBuiltin()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isBuiltin() : bool
    {
    }
}