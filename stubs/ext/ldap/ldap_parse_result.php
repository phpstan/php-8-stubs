<?php 

#endif
#ifdef HAVE_LDAP_PARSE_RESULT
/**
 * @param resource $ldap
 * @param resource $result
 * @param int $error_code
 * @param string $matched_dn
 * @param string $error_message
 * @param array $referrals
 * @param array $controls
 */
#[\Until('8.1')]
function ldap_parse_result($ldap, $result, &$error_code, &$matched_dn = null, &$error_message = null, &$referrals = null, &$controls = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_RESULT
/**
 * @param int $error_code
 * @param string $matched_dn
 * @param string $error_message
 * @param array $referrals
 * @param array $controls
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, &$error_code, &$matched_dn = null, &$error_message = null, &$referrals = null, &$controls = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_RESULT
/**
 * @param int $error_code
 * @param string $matched_dn
 * @param string $error_message
 * @param array $referrals
 * @param array $controls
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, &$error_code, &$matched_dn = null, &$error_message = null, &$referrals = null, &$controls = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_RESULT
/**
 * @param int $error_code
 * @param string $matched_dn
 * @param string $error_message
 * @param array $referrals
 * @param array $controls
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, &$error_code, &$matched_dn = null, &$error_message = null, &$referrals = null, &$controls = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_RESULT
/**
 * @param int $error_code
 * @param string $matched_dn
 * @param string $error_message
 * @param array $referrals
 * @param array $controls
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, &$error_code, &$matched_dn = null, &$error_message = null, &$referrals = null, &$controls = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_RESULT
/**
 * @param int $error_code
 * @param string $matched_dn
 * @param string $error_message
 * @param array $referrals
 * @param array $controls
 */
#[\Since('8.5')]
function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, &$error_code, &$matched_dn = null, &$error_message = null, &$referrals = null, &$controls = null): bool
{
}