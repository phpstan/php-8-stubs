<?php 

/** @param resource $result */
#[\Until('8.1')]
function pg_field_table($result, int $field, bool $oid_only = false): string|int|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): string|int|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): string|int|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): string|int|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): string|int|false
{
}
#[\Since('8.5')]
function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): string|int|false
{
}