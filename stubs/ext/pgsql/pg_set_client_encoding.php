<?php 

/** @param resource|string $connection */
#[\Until('8.1')]
function pg_set_client_encoding($connection, string $encoding = UNKNOWN): int
{
}
/** @param PgSql\Connection|string $connection */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_set_client_encoding($connection, string $encoding = UNKNOWN): int
{
}
/** @param PgSql\Connection|string $connection */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_set_client_encoding($connection, string $encoding = UNKNOWN): int
{
}
/** @param PgSql\Connection|string $connection */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_set_client_encoding($connection, string $encoding = UNKNOWN): int
{
}
/** @param PgSql\Connection|string $connection */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_set_client_encoding($connection, string $encoding = UNKNOWN): int
{
}
/** @param PgSql\Connection|string $connection */
#[\Since('8.5')]
function pg_set_client_encoding($connection, string $encoding = UNKNOWN): int
{
}