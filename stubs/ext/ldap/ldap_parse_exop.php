<?php 

#endif
#ifdef HAVE_LDAP_PARSE_EXTENDED_RESULT
/**
 * @param resource $ldap
 * @param resource $result
 * @param string $response_data
 * @param string $response_oid
 */
#[\Until('8.1')]
function ldap_parse_exop($ldap, $result, &$response_data = null, &$response_oid = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_EXTENDED_RESULT
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, &$response_data = null, &$response_oid = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_EXTENDED_RESULT
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, &$response_data = null, &$response_oid = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_EXTENDED_RESULT
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, &$response_data = null, &$response_oid = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_EXTENDED_RESULT
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, &$response_data = null, &$response_oid = null): bool
{
}
#endif
#ifdef HAVE_LDAP_PARSE_EXTENDED_RESULT
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.5')]
function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, &$response_data = null, &$response_oid = null): bool
{
}