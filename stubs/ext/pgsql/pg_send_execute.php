<?php 

/** @param resource $connection */
#[\Until('8.1')]
function pg_send_execute($connection, string $statement_name, array $params): int|bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): int|bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): int|bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): int|bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): int|bool
{
}
#[\Since('8.5')]
function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): int|bool
{
}