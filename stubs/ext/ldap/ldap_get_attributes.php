<?php 

/**
 * @param resource $ldap
 * @param resource $entry
 */
#[\Until('8.1')]
function ldap_get_attributes($ldap, $entry): array
{
}
/**
 * @return array<int|string, int|string|array>
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array
{
}
/**
 * @return array<int|string, int|string|array>
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array
{
}
/**
 * @return array<int|string, int|string|array>
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array
{
}
/**
 * @return array<int|string, int|string|array>
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array
{
}
/**
 * @return array<int|string, int|string|array>
 * @refcount 1
 */
#[\Since('8.5')]
function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array
{
}