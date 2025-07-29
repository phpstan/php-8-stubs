<?php 

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 */
#[\Until('8.5')]
function openssl_public_encrypt(string $data, &$encrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool
{
}
/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 */
#[\Since('8.5')]
function openssl_public_encrypt(#[\SensitiveParameter] string $data, &$encrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING, ?string $digest_algo = null): bool
{
}