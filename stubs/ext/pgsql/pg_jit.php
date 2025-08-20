<?php 

/**
 * @return array<string, string|null>
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_jit(?\PgSql\Connection $connection = null): array
{
}
/**
 * @return array<string, string|null>
 * @refcount 1
 */
#[\Since('8.5')]
function pg_jit(?\PgSql\Connection $connection = null): array
{
}