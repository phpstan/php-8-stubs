<?php 

/**
 * @param resource $lob
 * @alias pg_lo_close
 * @deprecated
 */
#[\Until('8.1')]
function pg_loclose($lob): bool
{
}
/**
 * @alias pg_lo_close
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_loclose(\PgSql\Lob $lob): bool
{
}
/**
 * @alias pg_lo_close
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_close() instead')]
#[\Since('8.4')]
function pg_loclose(\PgSql\Lob $lob): bool
{
}