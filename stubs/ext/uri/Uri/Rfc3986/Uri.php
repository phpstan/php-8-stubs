<?php 

namespace Uri\Rfc3986;

/** @strict-properties */
#[\Since('8.5')]
final readonly class Uri
{
    public static function parse(string $uri, ?\Uri\Rfc3986\Uri $baseUrl = null): ?static
    {
    }
    public function __construct(string $uri, ?\Uri\Rfc3986\Uri $baseUrl = null)
    {
    }
    public function getScheme(): ?string
    {
    }
    public function getRawScheme(): ?string
    {
    }
    public function withScheme(?string $scheme): static
    {
    }
    public function getUserInfo(): ?string
    {
    }
    public function getRawUserInfo(): ?string
    {
    }
    public function withUserInfo(#[\SensitiveParameter] ?string $userinfo): static
    {
    }
    public function getUsername(): ?string
    {
    }
    public function getRawUsername(): ?string
    {
    }
    public function getPassword(): ?string
    {
    }
    public function getRawPassword(): ?string
    {
    }
    public function getHost(): ?string
    {
    }
    public function getRawHost(): ?string
    {
    }
    public function withHost(?string $host): static
    {
    }
    public function getPort(): ?int
    {
    }
    public function withPort(?int $port): static
    {
    }
    public function getPath(): string
    {
    }
    public function getRawPath(): string
    {
    }
    public function withPath(string $path): static
    {
    }
    public function getQuery(): ?string
    {
    }
    public function getRawQuery(): ?string
    {
    }
    public function withQuery(?string $query): static
    {
    }
    public function getFragment(): ?string
    {
    }
    public function getRawFragment(): ?string
    {
    }
    public function withFragment(?string $fragment): static
    {
    }
    public function equals(\Uri\Rfc3986\Uri $uri, \Uri\UriComparisonMode $comparisonMode = \Uri\UriComparisonMode::ExcludeFragment): bool
    {
    }
    public function toString(): string
    {
    }
    public function toRawString(): string
    {
    }
    public function resolve(string $uri): static
    {
    }
    public function __serialize(): array
    {
    }
    public function __unserialize(array $data): void
    {
    }
    public function __debugInfo(): array
    {
    }
}