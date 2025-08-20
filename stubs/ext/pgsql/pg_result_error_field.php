<?php 

/** @param resource $result */
#[\Until('8.1')]
function pg_result_error_field($result, int $field_code): string|false|null
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_result_error_field(\PgSql\Result $result, int $field_code): string|false|null
{
}
/** @refcount 1 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_result_error_field(\PgSql\Result $result, int $field_code): string|false|null
{
}
/** @refcount 1 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_result_error_field(\PgSql\Result $result, int $field_code): string|false|null
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_result_error_field(\PgSql\Result $result, int $field_code): string|false|null
{
}
/** @refcount 1 */
#[\Since('8.5')]
function pg_result_error_field(\PgSql\Result $result, int $field_code): string|false|null
{
}