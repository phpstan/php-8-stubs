<?php 

/** @param resource $ldap */
#[\Until('8.1')]
function ldap_error($ldap): string
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_error(\LDAP\Connection $ldap): string
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_error(\LDAP\Connection $ldap): string
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_error(\LDAP\Connection $ldap): string
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_error(\LDAP\Connection $ldap): string
{
}
#[\Since('8.5')]
function ldap_error(\LDAP\Connection $ldap): string
{
}