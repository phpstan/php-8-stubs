<?php 

#endif
#ifdef HAVE_LDAP_REFRESH_S
/** @param resource $ldap */
#[\Until('8.1')]
function ldap_exop_refresh($ldap, string $dn, int $ttl): int|false
{
}
#endif
#ifdef HAVE_LDAP_REFRESH_S
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): int|false
{
}
#endif
#ifdef HAVE_LDAP_REFRESH_S
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): int|false
{
}
#endif
#ifdef HAVE_LDAP_REFRESH_S
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): int|false
{
}
#endif
#ifdef HAVE_LDAP_REFRESH_S
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): int|false
{
}
#endif
#ifdef HAVE_LDAP_REFRESH_S
#[\Since('8.5')]
function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): int|false
{
}