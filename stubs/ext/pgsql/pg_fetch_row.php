<?php 

/**
 * @param resource $result
 */
#[\Until('8.1')]
function pg_fetch_row($result, ?int $row = null, int $mode = PGSQL_NUM): array|false
{
}
/**
 * @return array<int|string, string|null>|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_fetch_row(\PgSql\Result $result, ?int $row = null, int $mode = PGSQL_NUM): array|false
{
}
/**
 * @return array<int|string, string|null>|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_fetch_row(\PgSql\Result $result, ?int $row = null, int $mode = PGSQL_NUM): array|false
{
}
/**
 * @return array<int|string, string|null>|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_fetch_row(\PgSql\Result $result, ?int $row = null, int $mode = PGSQL_NUM): array|false
{
}
/**
 * @return array<int|string, string|null>|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_fetch_row(\PgSql\Result $result, ?int $row = null, int $mode = PGSQL_NUM): array|false
{
}
/**
 * @return array<int|string, string|null>|false
 * @refcount 1
 */
#[\Since('8.5')]
function pg_fetch_row(\PgSql\Result $result, ?int $row = null, int $mode = PGSQL_NUM): array|false
{
}