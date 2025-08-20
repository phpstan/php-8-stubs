<?php 

/**
 * @param resource $connection
 * @return resource|false
 */
#[\Until('8.1')]
function pg_socket($connection)
{
}
/**
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_socket(\PgSql\Connection $connection)
{
}
/**
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_socket(\PgSql\Connection $connection)
{
}
/**
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_socket(\PgSql\Connection $connection)
{
}
/**
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_socket(\PgSql\Connection $connection)
{
}
/**
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.5')]
function pg_socket(\PgSql\Connection $connection)
{
}