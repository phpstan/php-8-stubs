<?php 

/**
 * @param resource $ldap
 * @return resource|false
 */
#[\Until('8.1')]
function ldap_add_ext($ldap, string $dn, array $entry, ?array $controls = null)
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): \LDAP\Result|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): \LDAP\Result|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): \LDAP\Result|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): \LDAP\Result|false
{
}
#[\Since('8.5')]
function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = null): \LDAP\Result|false
{
}