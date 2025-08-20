<?php 

/**
 * @param resource|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 * @return resource|false
 */
#[\Until('8.1')]
function pg_lo_export($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_lo_export($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_lo_export($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_lo_export($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_lo_export($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection|string|int $connection
 * @param string|int $oid
 * @param string|int $filename
 */
#[\Since('8.5')]
function pg_lo_export($connection, $oid = UNKNOWN, $filename = UNKNOWN): bool
{
}