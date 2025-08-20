<?php 

abstract class ReflectionType implements \Stringable
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
    /**
     * @tentative-return-type
     * @return bool
     */
    public function allowsNull()
    {
    }
    public function __toString(): string
    {
    }
}