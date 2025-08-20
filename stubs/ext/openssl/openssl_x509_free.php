<?php 

/** @deprecated */
#[\Until('8.4')]
function openssl_x509_free(\OpenSSLCertificate $certificate): void
{
}
#[\Deprecated(since: '8.0', message: 'as OpenSSLCertificate objects are freed automatically')]
#[\Since('8.4')]
#[\Until('8.5')]
function openssl_x509_free(\OpenSSLCertificate $certificate): void
{
}
#[\Deprecated(since: '8.0', message: 'as OpenSSLCertificate objects are freed automatically')]
#[\Since('8.5')]
function openssl_x509_free(\OpenSSLCertificate $certificate): void
{
}