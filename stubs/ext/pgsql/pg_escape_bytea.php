<?php 

/** @param resource|string $connection */
#[\Until('8.1')]
function pg_escape_bytea($connection, string $string = UNKNOWN): string
{
}
/**
 * @param PgSql\Connection|string $connection
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_escape_bytea($connection, string $string = UNKNOWN): string
{
}
/**
 * @param PgSql\Connection|string $connection
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_escape_bytea($connection, string $string = UNKNOWN): string
{
}
/**
 * @param PgSql\Connection|string $connection
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_escape_bytea($connection, string $string = UNKNOWN): string
{
}
/**
 * @param PgSql\Connection|string $connection
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_escape_bytea($connection, string $string = UNKNOWN): string
{
}
/**
 * @param PgSql\Connection|string $connection
 * @refcount 1
 */
#[\Since('8.5')]
function pg_escape_bytea($connection, string $string = UNKNOWN): string
{
}