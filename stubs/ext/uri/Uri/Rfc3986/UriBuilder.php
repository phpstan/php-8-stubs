<?php 

namespace Uri\Rfc3986;

/** @strict-properties */
#[\Since('8.6')]
final class UriBuilder
{
    private ?string $scheme = null;
    private ?string $userinfo = null;
    private ?string $host = null;
    private ?int $port = null;
    private string $path = "";
    private ?string $query = null;
    private ?string $fragment = null;
    public function reset(): static
    {
    }
    public function setScheme(?string $scheme): static
    {
    }
    public function setUserInfo(#[\SensitiveParameter] ?string $userInfo): static
    {
    }
    public function setHost(?string $host): static
    {
    }
    public function setPort(?int $port): static
    {
    }
    public function setPath(string $path): static
    {
    }
    public function setQuery(?string $query): static
    {
    }
    public function setFragment(?string $fragment): static
    {
    }
    public function build(?\Uri\Rfc3986\Uri $baseUrl = null): \Uri\Rfc3986\Uri
    {
    }
}