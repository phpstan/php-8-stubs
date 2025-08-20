<?php 

#if (LDAP_API_VERSION > 2000) || defined(HAVE_ORALDAP)
/** @param resource $ldap */
#[\Until('8.1')]
function ldap_rename($ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = null): bool
{
}
#if (LDAP_API_VERSION > 2000) || defined(HAVE_ORALDAP)
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = null): bool
{
}
#if (LDAP_API_VERSION > 2000) || defined(HAVE_ORALDAP)
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = null): bool
{
}
#if (LDAP_API_VERSION > 2000) || defined(HAVE_ORALDAP)
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = null): bool
{
}
#if (LDAP_API_VERSION > 2000) || defined(HAVE_ORALDAP)
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = null): bool
{
}
#if (LDAP_API_VERSION > 2000) || defined(HAVE_ORALDAP)
#[\Since('8.5')]
function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = null): bool
{
}