<?php 

/** @param resource $result */
#[\Until('8.1')]
function pg_result_status($result, int $mode = PGSQL_STATUS_LONG): string|int
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_result_status(\PgSql\Result $result, int $mode = PGSQL_STATUS_LONG): string|int
{
}
/** @refcount 1 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_result_status(\PgSql\Result $result, int $mode = PGSQL_STATUS_LONG): string|int
{
}
/** @refcount 1 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_result_status(\PgSql\Result $result, int $mode = PGSQL_STATUS_LONG): string|int
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_result_status(\PgSql\Result $result, int $mode = PGSQL_STATUS_LONG): string|int
{
}
/** @refcount 1 */
#[\Since('8.5')]
function pg_result_status(\PgSql\Result $result, int $mode = PGSQL_STATUS_LONG): string|int
{
}