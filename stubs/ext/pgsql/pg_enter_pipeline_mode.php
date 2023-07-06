<?php 

#ifdef LIBPQ_HAS_PIPELINING
#[\Since('8.3')]
function pg_enter_pipeline_mode(\PgSql\Connection $connection): bool
{
}