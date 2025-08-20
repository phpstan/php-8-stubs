<?php 

/**
 * @param resource $result
 * @alias pg_last_oid
 * @deprecated
 */
#[\Until('8.1')]
function pg_getlastoid($result): string|int|false
{
}
/**
 * @alias pg_last_oid
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_getlastoid(\PgSql\Result $result): string|int|false
{
}
/**
 * @alias pg_last_oid
 */
#[\Deprecated(since: '8.0', message: 'use pg_last_oid() instead')]
#[\Since('8.4')]
function pg_getlastoid(\PgSql\Result $result): string|int|false
{
}