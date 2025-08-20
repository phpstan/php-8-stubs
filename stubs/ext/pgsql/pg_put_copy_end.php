<?php 

#[\Since('8.4')]
#[\Until('8.5')]
function pg_put_copy_end(\PgSql\Connection $connection, ?string $error = null): int
{
}
#[\Since('8.5')]
function pg_put_copy_end(\PgSql\Connection $connection, ?string $error = null): int
{
}