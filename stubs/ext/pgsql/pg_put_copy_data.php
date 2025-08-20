<?php 

#[\Since('8.4')]
#[\Until('8.5')]
function pg_put_copy_data(\PgSql\Connection $connection, string $cmd): int
{
}
#[\Since('8.5')]
function pg_put_copy_data(\PgSql\Connection $connection, string $cmd): int
{
}