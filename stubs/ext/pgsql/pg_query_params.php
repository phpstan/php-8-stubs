<?php 

/**
 * @param resource|string $connection
 * @param string|array $query
 * @return resource|false
 */
#[\Until('8.1')]
function pg_query_params($connection, $query, array $params = UNKNOWN)
{
}
/**
 * @param PgSql\Connection|string $connection
 * @param string|array $query
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_query_params($connection, $query, array $params = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @param string|array $query
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_query_params($connection, $query, array $params = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @param string|array $query
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_query_params($connection, $query, array $params = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @param string|array $query
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_query_params($connection, $query, array $params = UNKNOWN): \PgSql\Result|false
{
}
/**
 * @param PgSql\Connection|string $connection
 * @param string|array $query
 * @refcount 1
 */
#[\Since('8.5')]
function pg_query_params($connection, $query, array $params = UNKNOWN): \PgSql\Result|false
{
}