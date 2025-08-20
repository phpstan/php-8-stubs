<?php 

/**
 * @param resource $result
 * @alias pg_num_rows
 * @deprecated
 */
#[\Until('8.1')]
function pg_numrows($result): int
{
}
/**
 * @alias pg_num_rows
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_numrows(\PgSql\Result $result): int
{
}
/**
 * @alias pg_num_rows
 */
#[\Deprecated(since: '8.0', message: 'use pg_num_rows() instead')]
#[\Since('8.4')]
function pg_numrows(\PgSql\Result $result): int
{
}