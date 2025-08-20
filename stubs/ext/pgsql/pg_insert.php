<?php 

/**
 * @param resource $connection
 * @return resource|string|bool
 */
#[\Until('8.1')]
function pg_insert($connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC)
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC): \PgSql\Result|string|bool
{
}
/** @refcount 1 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC): \PgSql\Result|string|bool
{
}
/** @refcount 1 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC): \PgSql\Result|string|bool
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC): \PgSql\Result|string|bool
{
}
/** @refcount 1 */
#[\Since('8.5')]
function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = PGSQL_DML_EXEC): \PgSql\Result|string|bool
{
}