<?php 

/** @generate-function-entries */
#ifdef HAVE_ORALDAP
/** @return resource|false */
#[\Until('8.1')]
function ldap_connect(?string $uri = null, int $port = 389, string $wallet = UNKNOWN, string $password = UNKNOWN, int $auth_mode = GSLC_SSL_NO_AUTH)
{
}
#ifdef HAVE_ORALDAP
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_connect(?string $uri = null, int $port = 389, string $wallet = UNKNOWN, string $password = UNKNOWN, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}
#endif
#ifdef HAVE_ORALDAP
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_connect(?string $uri = null, int $port = 389, string $wallet = UNKNOWN, #[\SensitiveParameter] string $password = UNKNOWN, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}
#endif
#ifdef HAVE_ORALDAP
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_connect(?string $uri = null, int $port = 389, string $wallet = UNKNOWN, #[\SensitiveParameter] string $password = UNKNOWN, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}
#endif
#ifdef HAVE_ORALDAP
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_connect(?string $uri = null, int $port = 389, string $wallet = UNKNOWN, #[\SensitiveParameter] string $password = UNKNOWN, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}
#endif
#ifdef HAVE_ORALDAP
#[\Since('8.5')]
function ldap_connect(?string $uri = null, int $port = 389, string $wallet = UNKNOWN, #[\SensitiveParameter] string $password = UNKNOWN, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}