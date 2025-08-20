<?php 

#ifdef HAVE_PG_SET_CHUNKED_ROWS_SIZE
#[\Since('8.4')]
#[\Until('8.5')]
function pg_set_chunked_rows_size(\PgSql\Connection $connection, int $size): bool
{
}
#ifdef HAVE_PG_SET_CHUNKED_ROWS_SIZE
#[\Since('8.5')]
function pg_set_chunked_rows_size(\PgSql\Connection $connection, int $size): bool
{
}