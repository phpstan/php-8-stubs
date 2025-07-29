<?php 

/**
 * @strict-properties
 * @not-serializable
 */
#[\Since('8.4')]
final class ReflectionConstant implements \Reflector
{
    public function __construct(string $name)
    {
    }
    public function getName(): string
    {
    }
    public function getNamespaceName(): string
    {
    }
    public function getShortName(): string
    {
    }
    public function getValue(): mixed
    {
    }
    public function isDeprecated(): bool
    {
    }
    #[\Since('8.5')]
    public function getFileName(): string|false
    {
    }
    #[\Since('8.5')]
    public function getExtension(): ?ReflectionExtension
    {
    }
    #[\Since('8.5')]
    public function getExtensionName(): string|false
    {
    }
    public function __toString(): string
    {
    }
    #[\Since('8.5')]
    public function getAttributes(?string $name = null, int $flags = 0): array
    {
    }
}