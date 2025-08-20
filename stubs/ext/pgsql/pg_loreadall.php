<?php 

/**
 * @param resource $lob
 * @alias pg_lo_read_all
 * @deprecated
 */
#[\Until('8.1')]
function pg_loreadall($lob): int
{
}
/**
 * @alias pg_lo_read_all
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_loreadall(\PgSql\Lob $lob): int
{
}
/**
 * @alias pg_lo_read_all
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_read_all() instead')]
#[\Since('8.4')]
function pg_loreadall(\PgSql\Lob $lob): int
{
}