<?php 

#ifdef HAVE_PG_RESULT_MEMORY_SIZE
#[\Since('8.4')]
#[\Until('8.5')]
function pg_result_memory_size(\PgSql\Result $result): int
{
}
#ifdef HAVE_PG_RESULT_MEMORY_SIZE
#[\Since('8.5')]
function pg_result_memory_size(\PgSql\Result $result): int
{
}