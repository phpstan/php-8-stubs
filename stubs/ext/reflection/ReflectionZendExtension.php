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
    /** @return string */
    #[\Until('8.1')]
    public function getVersion()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getVersion() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getAuthor()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAuthor() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getURL()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getURL() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getCopyright()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCopyright() : string
    {
    }
}