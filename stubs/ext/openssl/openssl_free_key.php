<?php 

/**
 * @alias openssl_pkey_free
 * @deprecated
 */
#[\Until('8.4')]
function openssl_free_key(\OpenSSLAsymmetricKey $key): void
{
}
/**
 * @alias openssl_pkey_free
 */
#[\Deprecated(since: '8.0', message: 'as OpenSSLAsymmetricKey objects are freed automatically')]
#[\Since('8.4')]
function openssl_free_key(\OpenSSLAsymmetricKey $key): void
{
}