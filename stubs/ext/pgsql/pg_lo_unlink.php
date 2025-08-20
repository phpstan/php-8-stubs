<?php 

/**
 * @param resource $connection
 * @param string|int $oid
 */
#[\Until('8.1')]
function pg_lo_unlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_lo_unlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_lo_unlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_lo_unlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_lo_unlink($connection, $oid = UNKNOWN): bool
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 */
#[\Since('8.5')]
function pg_lo_unlink($connection, $oid = UNKNOWN): bool
{
}