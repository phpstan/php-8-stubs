<?php 

/**
 * @param resource|null $ldap
 * @param array|string|int|bool $value
 */
#[\Until('8.1')]
function ldap_set_option($ldap, int $option, $value): bool
{
}
/** @param array|string|int|bool $value */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_set_option(?\LDAP\Connection $ldap, int $option, $value): bool
{
}
/** @param array|string|int|bool $value */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_set_option(?\LDAP\Connection $ldap, int $option, $value): bool
{
}
/** @param array|string|int|bool $value */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_set_option(?\LDAP\Connection $ldap, int $option, $value): bool
{
}
/** @param array|string|int|bool $value */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_set_option(?\LDAP\Connection $ldap, int $option, $value): bool
{
}
/** @param array|string|int|bool $value */
#[\Since('8.5')]
function ldap_set_option(?\LDAP\Connection $ldap, int $option, $value): bool
{
}