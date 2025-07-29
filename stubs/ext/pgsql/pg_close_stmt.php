<?php 

#endif
#ifdef HAVE_PG_CLOSE_STMT
#[\Since('8.5')]
function pg_close_stmt(\Pgsql\Connection $connection, string $statement_name): \PgSql\Result|false
{
}