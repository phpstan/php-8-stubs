<?php 

namespace Openssl;

/**
 * @strict-properties
 */
#[\Since('8.6')]
final class Psk
{
    /**
     * @cvalue PHP_OPENSSL_PSK_MAX_PSK_LEN
     */
    public const int MAX_PSK_LEN = UNKNOWN;
    /**
     * @cvalue PHP_OPENSSL_PSK_MAX_IDENTITY_LEN
     */
    public const int MAX_IDENTITY_LEN = UNKNOWN;
    public readonly string $psk;
    public readonly ?string $identity;
    public function __construct(string $psk, ?string $identity = null)
    {
    }
}