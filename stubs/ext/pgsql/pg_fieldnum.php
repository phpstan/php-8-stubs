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
#[\Until('8.2')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}
/**
 * @alias pg_field_num
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}
/**
 * @alias pg_field_num
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}
/**
 * @alias pg_field_num
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_num() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}
/**
 * @alias pg_field_num
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_num() instead')]
#[\Since('8.5')]
function pg_fieldnum(\PgSql\Result $result, string $field): int
{
}