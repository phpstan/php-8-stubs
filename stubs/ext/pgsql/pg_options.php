<?php 

/** @param resource|null $connection */
#[\Until('8.1')]
function pg_options($connection = null): string
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_options(?\PgSql\Connection $connection = null): string
{
}
/** @refcount 1 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_options(?\PgSql\Connection $connection = null): string
{
}
/** @refcount 1 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_options(?\PgSql\Connection $connection = null): string
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_options(?\PgSql\Connection $connection = null): string
{
}
/** @refcount 1 */
#[\Since('8.5')]
function pg_options(?\PgSql\Connection $connection = null): string
{
}