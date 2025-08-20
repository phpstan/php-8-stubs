<?php 

/**
 * @param resource $ldap
 * @param array|string|int $value
 */
#[\Until('8.1')]
function ldap_get_option($ldap, int $option, &$value = null): bool
{
}
/** @param array|string|int $value */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_get_option(\LDAP\Connection $ldap, int $option, &$value = null): bool
{
}
/** @param array|string|int $value */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_get_option(\LDAP\Connection $ldap, int $option, &$value = null): bool
{
}
/** @param array|string|int $value */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_get_option(\LDAP\Connection $ldap, int $option, &$value = null): bool
{
}
/** @param array|string|int $value */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_get_option(\LDAP\Connection $ldap, int $option, &$value = null): bool
{
}
/** @param array|string|int $value */
#[\Since('8.5')]
function ldap_get_option(?\LDAP\Connection $ldap, int $option, &$value = null): bool
{
}