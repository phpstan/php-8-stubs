<?php 

class ReflectionZendExtension implements \Reflector
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
     * @return string
     */
    public function getVersion()
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    public function getAuthor()
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    public function getURL()
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    public function getCopyright()
    {
    }
}