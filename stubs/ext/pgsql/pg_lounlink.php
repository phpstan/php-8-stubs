<?php 

/**
 * @param resource $connection
 * @param string|int $oid
 * @alias pg_lo_unlink
 * @deprecated
 */
#[\Until('8.1')]
function pg_lounlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_unlink
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_lounlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_unlink
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_unlink() instead')]
#[\Since('8.4')]
function pg_lounlink($connection, $oid = UNKNOWN): bool
{
}