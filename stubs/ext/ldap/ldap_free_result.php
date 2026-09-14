<?php 

/** @param resource $ldap */
#[\Until('8.1')]
function ldap_free_result($ldap): bool
{
}
#[\Since('8.1')]
#[\Until('8.6')]
function ldap_free_result(\LDAP\Result $result): bool
{
}
#[\Since('8.6')]
function ldap_free_result(\LDAP\Result $result): true
{
}