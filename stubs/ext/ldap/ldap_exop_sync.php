<?php 

/**
 * @param string $response_data
 * @param string $response_oid
 */
#[\Since('8.3')]
function ldap_exop_sync(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = null, ?array $controls = NULL, &$response_data = null, &$response_oid = null): \LDAP\Result|bool
{
}