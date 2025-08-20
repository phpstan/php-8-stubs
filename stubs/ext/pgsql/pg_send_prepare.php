<?php 

/** @param resource $connection */
#[\Until('8.1')]
function pg_send_prepare($connection, string $statement_name, string $query): int|bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): int|bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): int|bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): int|bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): int|bool
{
}
#[\Since('8.5')]
function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): int|bool
{
}