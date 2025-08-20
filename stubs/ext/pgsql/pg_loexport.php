<?php 

/**
 * @param resource|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 * @return resource|false
 * @alias pg_lo_export
 * @deprecated
 */
#[\Until('8.1')]
function pg_loexport($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 * @alias pg_lo_export
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_loexport($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 * @alias pg_lo_export
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_export() instead')]
#[\Since('8.4')]
function pg_loexport($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}