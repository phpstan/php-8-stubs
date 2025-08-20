<?php 

#[\Since('8.1')]
class ReflectionEnum extends \ReflectionClass
{
    #[\Until('8.2')]
    public function getBackingType(): ?ReflectionType
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function getBackingType(): ?ReflectionNamedType
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function getBackingType(): ?ReflectionNamedType
    {
    }
    public function __construct(object|string $objectOrClass)
    {
    }
    public function hasCase(string $name): bool
    {
    }
    public function getCase(string $name): ReflectionEnumUnitCase
    {
    }
    public function getCases(): array
    {
    }
    public function isBacked(): bool
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getBackingType(): ?ReflectionNamedType
    {
    }
    #[\Since('8.5')]
    public function getBackingType(): ?ReflectionNamedType
    {
    }
}