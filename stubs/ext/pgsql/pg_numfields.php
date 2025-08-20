<?php 

/**
 * @param resource $result
 * @alias pg_num_fields
 * @deprecated
 */
#[\Until('8.1')]
function pg_numfields($result): int
{
}
/**
 * @alias pg_num_fields
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_numfields(\PgSql\Result $result): int
{
}
/**
 * @alias pg_num_fields
 */
#[\Deprecated(since: '8.0', message: 'use pg_num_fields() instead')]
#[\Since('8.4')]
function pg_numfields(\PgSql\Result $result): int
{
}