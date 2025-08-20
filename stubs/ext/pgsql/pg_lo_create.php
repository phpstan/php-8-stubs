<?php 

/**
 * @param resource $connection
 * @param string|int $oid
 */
#[\Until('8.1')]
function pg_lo_create($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_lo_create($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_lo_create($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_lo_create($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_lo_create($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}
/**
 * @param PgSql\Connection $connection
 * @param string|int $oid
 * @refcount 1
 */
#[\Since('8.5')]
function pg_lo_create($connection = UNKNOWN, $oid = UNKNOWN): string|int|false
{
}