<?php 

/**
 * @param resource $connection
 * @param string|int $oid
 * @alias pg_lo_create
 * @deprecated
 */
#[\Until('8.1')]
function pg_locreate($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_create
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_locreate($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_create
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_create() instead')]
#[\Since('8.4')]
function pg_locreate($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}