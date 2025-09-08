<?php 

namespace Uri\WhatWg;

/** @strict-properties */
#[\Since('8.5')]
final readonly class Url
{
    /** @param array $errors */
    public static function parse(string $uri, ?\Uri\WhatWg\Url $baseUrl = null, &$errors = null): ?static
    {
    }
    /** @param array $softErrors */
    public function __construct(string $uri, ?\Uri\WhatWg\Url $baseUrl = null, &$softErrors = null)
    {
    }
    public function getScheme(): string
    {
    }
    public function withScheme(string $scheme): static
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::getUsername */
    public function getUsername(): ?string
    {
    }
    public function withUsername(?string $username): static
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::getPassword */
    public function getPassword(): ?string
    {
    }
    public function withPassword(#[\SensitiveParameter] ?string $password): static
    {
    }
    public function getAsciiHost(): ?string
    {
    }
    public function getUnicodeHost(): ?string
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::withHost */
    public function withHost(?string $host): static
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::getPort */
    public function getPort(): ?int
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::withPort */
    public function withPort(?int $port): static
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::getPath */
    public function getPath(): string
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::withPath */
    public function withPath(string $path): static
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::getQuery */
    public function getQuery(): ?string
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::withQuery */
    public function withQuery(?string $query): static
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::getFragment */
    public function getFragment(): ?string
    {
    }
    /** @implementation-alias Uri\Rfc3986\Uri::withFragment */
    public function withFragment(?string $fragment): static
    {
    }
    public function equals(\Uri\WhatWg\Url $url, \Uri\UriComparisonMode $comparisonMode = \Uri\UriComparisonMode::ExcludeFragment): bool
    {
    }
    public function toAsciiString(): string
    {
    }
    public function toUnicodeString(): string
    {
    }
    /** @param array $softErrors */
    public function resolve(string $uri, &$softErrors = null): static
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