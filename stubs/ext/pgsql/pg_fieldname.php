<?php 

/**
 * @param resource $result
 * @alias pg_field_name
 * @deprecated
 */
#[\Until('8.1')]
function pg_fieldname($result, int $field): string
{
}
/**
 * @alias pg_field_name
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_fieldname(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_name
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_fieldname(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_name
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_fieldname(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_name
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_name() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_fieldname(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_name
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_name() instead')]
#[\Since('8.5')]
function pg_fieldname(\PgSql\Result $result, int $field): string
{
}