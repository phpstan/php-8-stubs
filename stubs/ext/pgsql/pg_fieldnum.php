<?php 

/**
 * @param resource $result
 * @alias pg_field_num
 * @deprecated
 */
#[\Until('8.1')]
function pg_fieldnum($result, string $field): int
{
}
/**
 * @alias pg_field_num
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}
/**
 * @alias pg_field_num
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_num() instead')]
#[\Since('8.4')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}