<?php 

/**
 * @param resource $result
 * @alias pg_field_type
 * @deprecated
 */
#[\Until('8.1')]
function pg_fieldtype($result, int $field): string
{
}
/**
 * @alias pg_field_type
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_fieldtype(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_type
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_fieldtype(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_type
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_fieldtype(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_type
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_type() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_fieldtype(\PgSql\Result $result, int $field): string
{
}
/**
 * @alias pg_field_type
 */
#[\Deprecated(since: '8.0', message: 'use pg_field_type() instead')]
#[\Since('8.5')]
function pg_fieldtype(\PgSql\Result $result, int $field): string
{
}