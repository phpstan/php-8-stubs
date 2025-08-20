<?php 

/** @deprecated */
#[\Until('8.4')]
function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void
{
}
#[\Deprecated(since: '8.0', message: 'as OpenSSLAsymmetricKey objects are freed automatically')]
#[\Since('8.4')]
#[\Until('8.5')]
function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void
{
}
#[\Deprecated(since: '8.0', message: 'as OpenSSLAsymmetricKey objects are freed automatically')]
#[\Since('8.5')]
function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void
{
}