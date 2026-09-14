<?php 

#endif
#ifdef HAVE_PG_CLOSE_STMT
#[\Since('8.5')]
#[\Until('8.6')]
function pg_close_stmt(\Pgsql\Connection $connection, string $statement_name): \PgSql\Result|false
{
}
#endif
#ifdef HAVE_PG_CLOSE_STMT
#[\Since('8.6')]
function pg_close_stmt(\PgSql\Connection $connection, string $statement_name): \PgSql\Result|false
{
}