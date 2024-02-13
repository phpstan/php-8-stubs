<?php 

/** @param resource|null $connection */
#[\Until('8.1')]
function pg_untrace($connection = null): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pg_untrace(?\PgSql\Connection $connection = null): bool
{
}
#[\Since('8.2')]
function pg_untrace(?\PgSql\Connection $connection = null): true
{
}