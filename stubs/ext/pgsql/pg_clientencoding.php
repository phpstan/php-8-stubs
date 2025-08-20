<?php 

/**
 * @param resource|null $connection
 * @alias pg_client_encoding
 * @deprecated
 */
#[\Until('8.1')]
function pg_clientencoding($connection = null): string
{
}
/**
 * @alias pg_client_encoding
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_clientencoding(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_client_encoding
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_clientencoding(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_client_encoding
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_clientencoding(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_client_encoding
 */
#[\Deprecated(since: '8.0', message: 'use pg_client_encoding() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_clientencoding(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_client_encoding
 */
#[\Deprecated(since: '8.0', message: 'use pg_client_encoding() instead')]
#[\Since('8.5')]
function pg_clientencoding(?\PgSql\Connection $connection = null): string
{
}