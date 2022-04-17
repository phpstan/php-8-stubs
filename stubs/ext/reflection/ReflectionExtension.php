<?php 

/** @not-serializable */
class ReflectionExtension implements \Reflector
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
    public function getFunctions()
    {
    }
    /** @tentative-return-type */
    public function getConstants()
    {
    }
    /** @tentative-return-type */
    public function getINIEntries()
    {
    }
    /** @tentative-return-type */
    public function getClasses()
    {
    }
    /** @tentative-return-type */
    public function getClassNames()
    {
    }
    /** @tentative-return-type */
    public function getDependencies()
    {
    }
    /** @tentative-return-type */
    public function info()
    {
    }
    /** @tentative-return-type */
    public function isPersistent()
    {
    }
    /** @tentative-return-type */
    public function isTemporary()
    {
    }
}