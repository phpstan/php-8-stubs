<?php 

/**
 * @param resource $odbc
 * @return resource|false
 */
#[\Until('8.4')]
function odbc_prepare($odbc, string $query)
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_prepare(\Odbc\Connection $odbc, string $query): \Odbc\Result|false
{
}
#[\Since('8.5')]
function odbc_prepare(\Odbc\Connection $odbc, string $query): \Odbc\Result|false
{
}