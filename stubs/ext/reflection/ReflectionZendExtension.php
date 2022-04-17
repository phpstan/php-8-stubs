<?php 

/** @not-serializable */
class ReflectionZendExtension implements \Reflector
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
    public function __construct(string $name)
    {
    }
    public function __toString() : string
    {
    }
    /** @tentative-return-type */
    public function getName()
    {
    }
    /** @tentative-return-type */
    public function getVersion()
    {
    }
    /** @tentative-return-type */
    public function getAuthor()
    {
    }
    /** @tentative-return-type */
    public function getURL()
    {
    }
    /** @tentative-return-type */
    public function getCopyright()
    {
    }
}