<?php 

/** @param resource $result */
#[\Until('8.1')]
function pg_fetch_all($result, int $mode = PGSQL_ASSOC): array
{
}
/**
 * @return array<int, array>
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_fetch_all(\PgSql\Result $result, int $mode = PGSQL_ASSOC): array
{
}
/**
 * @return array<int, array>
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_fetch_all(\PgSql\Result $result, int $mode = PGSQL_ASSOC): array
{
}
/**
 * @return array<int, array>
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_fetch_all(\PgSql\Result $result, int $mode = PGSQL_ASSOC): array
{
}
/**
 * @return array<int, array>
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_fetch_all(\PgSql\Result $result, int $mode = PGSQL_ASSOC): array
{
}
/**
 * @return array<int, array>
 * @refcount 1
 */
#[\Since('8.5')]
function pg_fetch_all(\PgSql\Result $result, int $mode = PGSQL_ASSOC): array
{
}