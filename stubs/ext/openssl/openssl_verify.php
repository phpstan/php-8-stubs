<?php 

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
#[\Until('8.5')]
function openssl_verify(string $data, string $signature, $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1): int|false
{
}
/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
#[\Since('8.5')]
function openssl_verify(string $data, string $signature, $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1, int $padding = 0): int|false
{
}