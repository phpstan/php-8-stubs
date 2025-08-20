<?php 

/**
 * @param resource $ldap
 * @param resource $result
 */
#[\Until('8.1')]
function ldap_count_references($ldap, $result): int
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int
{
}
#[\Since('8.5')]
function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int
{
}