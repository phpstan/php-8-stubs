<?php 

/**
 * @param resource $ldap
 * @alias ldap_mod_replace
 */
#[\Until('8.1')]
function ldap_modify($ldap, string $dn, array $entry, ?array $controls = null): bool
{
}
/** @alias ldap_mod_replace */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_modify(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): bool
{
}
/** @alias ldap_mod_replace */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_modify(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): bool
{
}
/** @alias ldap_mod_replace */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_modify(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): bool
{
}
/** @alias ldap_mod_replace */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_modify(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): bool
{
}
/** @alias ldap_mod_replace */
#[\Since('8.5')]
function ldap_modify(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): bool
{
}