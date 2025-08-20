<?php 

/**
 * @param resource $result
 * @param string|int $row
 * @alias pg_field_prtlen
 * @deprecated
 */
#[\Until('8.1')]
function pg_fieldprtlen($result, $row, string|int $field = UNKNOWN): int|false
{
}
/**
 * @param string|int $row
 * @alias pg_field_prtlen
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.4')]
function pg_fieldprtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}
/**
 * @param string|int $row
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_prtlen() instead')]
#[\Since('8.4')]
function pg_fieldprtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}