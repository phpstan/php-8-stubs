<?php 

/**
 * @param resource $result
 * @alias pg_affected_rows
 * @deprecated
 */
#[\Until('8.1')]
function pg_cmdtuples($result): int
{
}
/**
 * @alias pg_affected_rows
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_cmdtuples(\PgSql\Result $result): int
{
}
/**
 * @alias pg_affected_rows
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_cmdtuples(\PgSql\Result $result): int
{
}
/**
 * @alias pg_affected_rows
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_cmdtuples(\PgSql\Result $result): int
{
}
/**
 * @alias pg_affected_rows
 */
#[\Deprecated(since: '8.0', message: 'use pg_affected_rows() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_cmdtuples(\PgSql\Result $result): int
{
}
/**
 * @alias pg_affected_rows
 */
#[\Deprecated(since: '8.0', message: 'use pg_affected_rows() instead')]
#[\Since('8.5')]
function pg_cmdtuples(\PgSql\Result $result): int
{
}