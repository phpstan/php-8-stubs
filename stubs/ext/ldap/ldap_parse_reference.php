<?php 

#ifdef HAVE_LDAP_PARSE_REFERENCE
/**
 * @param resource $ldap
 * @param resource $entry
 * @param array $referrals
 */
#[\Until('8.1')]
function ldap_parse_reference($ldap, $entry, &$referrals): bool
{
}
#ifdef HAVE_LDAP_PARSE_REFERENCE
/** @param array $referrals */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, &$referrals): bool
{
}
#ifdef HAVE_LDAP_PARSE_REFERENCE
/** @param array $referrals */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, &$referrals): bool
{
}
#ifdef HAVE_LDAP_PARSE_REFERENCE
/** @param array $referrals */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, &$referrals): bool
{
}
#ifdef HAVE_LDAP_PARSE_REFERENCE
/** @param array $referrals */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, &$referrals): bool
{
}
#ifdef HAVE_LDAP_PARSE_REFERENCE
/** @param array $referrals */
#[\Since('8.5')]
function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, &$referrals): bool
{
}