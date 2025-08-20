<?php 

/**
 * @param resource $result
 * @param string|int $row
 */
#[\Until('8.1')]
function pg_field_prtlen($result, $row, string|int $field = UNKNOWN): int|false
{
}
/** @param string|int $row */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_field_prtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}
/** @param string|int $row */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_field_prtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}
/** @param string|int|null $row */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_field_prtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}
/** @param string|int|null $row */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_field_prtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}
/** @param string|int|null $row */
#[\Since('8.5')]
function pg_field_prtlen(\PgSql\Result $result, $row, string|int $field = UNKNOWN): int|false
{
}