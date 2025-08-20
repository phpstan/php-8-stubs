<?php 

/**
 * @param resource $ldap
 * @alias ldap_unbind
 */
#[\Until('8.1')]
function ldap_close($ldap): bool
{
}
/** @alias ldap_unbind */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_close(\LDAP\Connection $ldap): bool
{
}
/** @alias ldap_unbind */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_close(\LDAP\Connection $ldap): bool
{
}
/** @alias ldap_unbind */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_close(\LDAP\Connection $ldap): bool
{
}
/** @alias ldap_unbind */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_close(\LDAP\Connection $ldap): bool
{
}
/** @alias ldap_unbind */
#[\Since('8.5')]
function ldap_close(\LDAP\Connection $ldap): bool
{
}