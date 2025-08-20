<?php 

/**
 * @param resource|null $connection
 * @alias pg_last_error
 * @deprecated
 */
#[\Until('8.1')]
function pg_errormessage($connection = null): string
{
}
/**
 * @alias pg_last_error
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_errormessage(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_last_error
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_errormessage(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_last_error
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_errormessage(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_last_error
 */
#[\Deprecated(since: '8.0', message: 'use pg_last_error() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_errormessage(?\PgSql\Connection $connection = null): string
{
}
/**
 * @alias pg_last_error
 */
#[\Deprecated(since: '8.0', message: 'use pg_last_error() instead')]
#[\Since('8.5')]
function pg_errormessage(?\PgSql\Connection $connection = null): string
{
}