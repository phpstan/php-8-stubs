<?php 

/** @param resource $result */
#[\Until('8.1')]
function pg_affected_rows($result): int
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function pg_affected_rows(\PgSql\Result $result): int
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function pg_affected_rows(\PgSql\Result $result): int
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function pg_affected_rows(\PgSql\Result $result): int
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function pg_affected_rows(\PgSql\Result $result): int
{
}
#[\Since('8.5')]
function pg_affected_rows(\PgSql\Result $result): int
{
}