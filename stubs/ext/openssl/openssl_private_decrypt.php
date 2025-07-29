<?php 

/**
 * @param string $decrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
#[\Until('8.5')]
function openssl_private_decrypt(string $data, &$decrypted_data, $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool
{
}
/**
 * @param string $decrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
#[\Since('8.5')]
function openssl_private_decrypt(string $data, #[\SensitiveParameter] &$decrypted_data, #[\SensitiveParameter] $private_key, int $padding = OPENSSL_PKCS1_PADDING, ?string $digest_algo = null): bool
{
}