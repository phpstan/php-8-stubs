<?php 

/**
 * @param resource $ldap
 * @param resource $result
 * @return resource|false
 */
#[\Until('8.1')]
function ldap_first_reference($ldap, $result)
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false
{
}
#[\Since('8.5')]
function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): \LDAP\ResultEntry|false
{
}