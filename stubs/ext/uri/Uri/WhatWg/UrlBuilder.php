<?php 

namespace Uri\WhatWg;

#[\Since('8.6')]
final class UrlBuilder
{
    private string $scheme = "";
    private ?string $username = null;
    private ?string $password = null;
    private ?string $host = null;
    private ?int $port = null;
    private string $path = "";
    private ?string $query = null;
    private ?string $fragment = null;
    public function reset(): static
    {
    }
    public function setScheme(string $scheme): static
    {
    }
    public function setUsername(?string $username): static
    {
    }
    public function setPassword(#[\SensitiveParameter] ?string $password): static
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
    /** @param array $softErrors */
    public function build(?\Uri\WhatWg\Url $baseUrl = null, &$softErrors = null): \Uri\WhatWg\Url
    {
    }
}