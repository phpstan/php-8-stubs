<?php 

/** @param resource $connection */
#[\Until('8.1')]
function pg_copy_to($connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.5')]
function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false
{
}