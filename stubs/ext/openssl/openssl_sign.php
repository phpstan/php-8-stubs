<?php 

/**
 * @param string $signature
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
#[\Until('8.5')]
function openssl_sign(string $data, &$signature, $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1): bool
{
}
/**
 * @param string $signature
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
#[\Since('8.5')]
function openssl_sign(string $data, &$signature, #[\SensitiveParameter] $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1, int $padding = 0): bool
{
}