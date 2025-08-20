<?php 

class ReflectionExtension implements \Reflector
{
    /** @implementation-alias ReflectionClass::__clone */
    #[\Until('8.1')]
    final private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.1')]
    #[\Until('8.2')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.2')]
    #[\Until('8.3')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.3')]
    #[\Until('8.4')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.4')]
    #[\Until('8.5')]
    private function __clone(): void
    {
    }
    /** @implementation-alias ReflectionClass::__clone */
    #[\Since('8.5')]
    private function __clone(): void
    {
    }
    public function __construct(string $name)
    {
    }
    public function __toString(): string
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @tentative-return-type
     * @return (string | null)
     */
    public function getVersion()
    {
    }
    /**
     * @tentative-return-type
     * @return ReflectionFunction[]
     */
    public function getFunctions()
    {
    }
    /**
     * @tentative-return-type
     * @return array
     */
    public function getConstants()
    {
    }
    /**
     * @tentative-return-type
     * @return array
     */
    public function getINIEntries()
    {
    }
    /**
     * @tentative-return-type
     * @return ReflectionClass[]
     */
    public function getClasses()
    {
    }
    /**
     * @tentative-return-type
     * @return string[]
     */
    public function getClassNames()
    {
    }
    /**
     * @tentative-return-type
     * @return array
     */
    public function getDependencies()
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function info()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isPersistent()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function isTemporary()
    {
    }
}