<?php 

/**
 * @param resource|array $ldap
 * @return resource|array|false
 */
#[\Until('8.1')]
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null)
{
}
/** @param LDAP\Connection|array $ldap */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null): \LDAP\Result|array|false
{
}
/** @param LDAP\Connection|array $ldap */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null): \LDAP\Result|array|false
{
}
/** @param LDAP\Connection|array $ldap */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null): \LDAP\Result|array|false
{
}
/** @param LDAP\Connection|array $ldap */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null): \LDAP\Result|array|false
{
}
/** @param LDAP\Connection|array $ldap */
#[\Since('8.5')]
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null): \LDAP\Result|array|false
{
}