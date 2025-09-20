<?php 

#ifdef LDAP_API_FEATURE_X_OPENLDAP
#[\Since('8.3')]
#[\Until('8.5')]
function ldap_connect_wallet(?string $uri = null, string $wallet, #[\SensitiveParameter] string $password, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}
#ifdef LDAP_API_FEATURE_X_OPENLDAP
#[\Deprecated(since: "8.5", message: "as it is broken since PHP 8.0")]
#[\Since('8.5')]
function ldap_connect_wallet(?string $uri = null, string $wallet, #[\SensitiveParameter] string $password, int $auth_mode = GSLC_SSL_NO_AUTH): \LDAP\Connection|false
{
}