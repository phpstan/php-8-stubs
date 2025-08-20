<?php 

/**
 * @param resource|string $connection
 * @return resource|false
 * @alias pg_query
 */
#[\Until('8.1')]
function pg_exec($connection, string $query = UNKNOWN)
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_query
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_exec($connection, string $query = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_query
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_exec($connection, string $query = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_query
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_exec($connection, string $query = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_query
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_exec($connection, string $query = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_query
 */
#[\Since('8.5')]
function pg_exec($connection, string $query = UNKNOWN): \PgSql\Result|false
{
}