<?php 

/**
 * @param resource $connection
 * @param string|int $oid
 * @return resource|false
 * @alias pg_lo_open
 * @deprecated
 */
#[\Until('8.1')]
function pg_loopen($connection, $oid = UNKNOWN, string $mode = UNKNOWN)
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_open
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_loopen($connection, $oid = UNKNOWN, string $mode = UNKNOWN): \PgSql\Lob|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_open
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_loopen($connection, $oid = UNKNOWN, string $mode = UNKNOWN): \PgSql\Lob|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_open
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_loopen($connection, $oid = UNKNOWN, string $mode = UNKNOWN): \PgSql\Lob|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_open
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_open() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_loopen($connection, $oid = UNKNOWN, string $mode = UNKNOWN): \PgSql\Lob|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @alias pg_lo_open
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_open() instead')]
#[\Since('8.5')]
function pg_loopen($connection, $oid = UNKNOWN, string $mode = UNKNOWN): \PgSql\Lob|false
{
}