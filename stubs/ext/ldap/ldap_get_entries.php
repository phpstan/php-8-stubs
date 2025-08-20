<?php 

/**
 * @param resource $ldap
 * @param resource $result
 */
#[\Until('8.1')]
function ldap_get_entries($ldap, $result): array|false
{
}
/**
 * @return array<int|string, int|array>|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false
{
}
/**
 * @return array<int|string, int|array>|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false
{
}
/**
 * @return array<int|string, int|array>|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false
{
}
/**
 * @return array<int|string, int|array>|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false
{
}
/**
 * @return array<int|string, int|array>|false
 * @refcount 1
 */
#[\Since('8.5')]
function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false
{
}