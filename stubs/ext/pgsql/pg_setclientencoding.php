<?php 

/**
 * @param resource|string $connection
 * @alias pg_set_client_encoding
 * @deprecated
 */
#[\Until('8.1')]
function pg_setclientencoding($connection, string $encoding = UNKNOWN): int
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_set_client_encoding
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_setclientencoding($connection, string $encoding = UNKNOWN): int
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_set_client_encoding
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_setclientencoding($connection, string $encoding = UNKNOWN): int
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_set_client_encoding
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_setclientencoding($connection, string $encoding = UNKNOWN): int
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_set_client_encoding
 */
#[\Deprecated(since: '8.0', message: 'use pg_set_client_encoding() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_setclientencoding($connection, string $encoding = UNKNOWN): int
{
}
/**
 * @param PgSql\Connection|string $connection
 * @alias pg_set_client_encoding
 */
#[\Deprecated(since: '8.0', message: 'use pg_set_client_encoding() instead')]
#[\Since('8.5')]
function pg_setclientencoding($connection, string $encoding = UNKNOWN): int
{
}