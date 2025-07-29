<?php 

#ifdef HAVE_PG_SERVICE
#[\Since('8.5')]
function pg_service(?\PgSql\Connection $connection = null): string
{
}