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
    /** @return string|null */
    #[\Until('8.1')]
    public function getVersion()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getVersion() : ?string
    {
    }
    /** @return ReflectionFunction[] */
    #[\Until('8.1')]
    public function getFunctions()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFunctions() : array
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getConstants()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getConstants() : array
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getINIEntries()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getINIEntries() : array
    {
    }
    /** @return ReflectionClass[] */
    #[\Until('8.1')]
    public function getClasses()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getClasses() : array
    {
    }
    /** @return string[] */
    #[\Until('8.1')]
    public function getClassNames()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getClassNames() : array
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getDependencies()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDependencies() : array
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function info()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function info() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isPersistent()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isPersistent() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isTemporary()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isTemporary() : bool
    {
    }
}