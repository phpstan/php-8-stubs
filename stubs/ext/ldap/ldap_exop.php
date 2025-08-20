<?php 

#endif
#ifdef HAVE_LDAP_EXTENDED_OPERATION_S
/**
 * @param resource $ldap
 * @param string $response_data
 * @param string $response_oid
 * @return resource|bool
 */
#[\Until('8.1')]
function ldap_exop($ldap, string $request_oid, ?string $request_data = null, ?array $controls = NULL, &$response_data = UNKNOWN, &$response_oid = null)
{
}
#endif
#ifdef HAVE_LDAP_EXTENDED_OPERATION_S
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_exop(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = NULL, &$response_data = UNKNOWN, &$response_oid = null): \LDAP\Result|bool
{
}
#endif
#ifdef HAVE_LDAP_EXTENDED_OPERATION_S
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_exop(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = NULL, &$response_data = UNKNOWN, &$response_oid = null): \LDAP\Result|bool
{
}
#endif
#ifdef HAVE_LDAP_EXTENDED_OPERATION_S
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_exop(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = NULL, &$response_data = UNKNOWN, &$response_oid = null): \LDAP\Result|bool
{
}
#endif
#ifdef HAVE_LDAP_EXTENDED_OPERATION_S
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_exop(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = null, &$response_data = UNKNOWN, &$response_oid = null): \LDAP\Result|bool
{
}
#endif
#ifdef HAVE_LDAP_EXTENDED_OPERATION_S
/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.5')]
function ldap_exop(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = null, &$response_data = UNKNOWN, &$response_oid = null): \LDAP\Result|bool
{
}