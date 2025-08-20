<?php 

/**
 * @param resource $ldap
 * @param resource $entry
 */
#[\Until('8.1')]
function ldap_first_attribute($ldap, $entry): string|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false
{
}
#[\Since('8.5')]
function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): string|false
{
}