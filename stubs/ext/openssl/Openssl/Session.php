<?php 

namespace Openssl;

/**
 * @strict-properties
 */
#[\Since('8.6')]
final class Session
{
    public readonly string $id;
    public function export(int $format = OPENSSL_ENCODING_PEM): string
    {
    }
    public static function import(string $data, int $format = OPENSSL_ENCODING_PEM): Session
    {
    }
    public function isResumable(): bool
    {
    }
    public function getTimeout(): int
    {
    }
    public function getCreatedAt(): int
    {
    }
    public function getProtocol(): ?string
    {
    }
    public function getCipher(): ?string
    {
    }
    public function hasTicket(): bool
    {
    }
    public function getTicketLifetimeHint(): ?int
    {
    }
    public function __serialize(): array
    {
    }
    public function __unserialize(array $data): void
    {
    }
}