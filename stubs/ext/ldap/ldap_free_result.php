<?php 

/** @param resource $ldap */
#[\Until('8.1')]
function ldap_free_result($ldap): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_free_result(\LDAP\Result $result): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_free_result(\LDAP\Result $result): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_free_result(\LDAP\Result $result): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_free_result(\LDAP\Result $result): bool
{
}
#[\Since('8.5')]
function ldap_free_result(\LDAP\Result $result): bool
{
}