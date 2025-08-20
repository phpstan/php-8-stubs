<?php 

#ifdef HAVE_PG_CONTEXT_VISIBILITY
#[\Since('8.3')]
#[\Until('8.4')]
function pg_set_error_context_visibility(\PgSql\Connection $connection, int $visibility): int
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function pg_set_error_context_visibility(\PgSql\Connection $connection, int $visibility): int
{
}
#[\Since('8.5')]
function pg_set_error_context_visibility(\PgSql\Connection $connection, int $visibility): int
{
}