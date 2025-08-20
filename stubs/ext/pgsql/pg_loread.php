<?php 

/**
 * @param resource $lob
 * @alias pg_lo_read
 * @deprecated
 */
#[\Until('8.1')]
function pg_loread($lob, int $length = 8192): string|false
{
}
/**
 * @alias pg_lo_read
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_loread(\PgSql\Lob $lob, int $length = 8192): string|false
{
}
/**
 * @alias pg_lo_read
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_read() instead')]
#[\Since('8.4')]
function pg_loread(\PgSql\Lob $lob, int $length = 8192): string|false
{
}