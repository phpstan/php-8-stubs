<?php 

/**
 * @param resource $odbc
 * @return resource|false
 */
#[\Until('8.4')]
function odbc_columnprivileges($odbc, ?string $catalog, string $schema, string $table, string $column)
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_columnprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, string $column): \Odbc\Result|false
{
}
#[\Since('8.5')]
function odbc_columnprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, string $column): \Odbc\Result|false
{
}