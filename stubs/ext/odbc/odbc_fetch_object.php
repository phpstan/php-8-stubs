<?php 

#ifdef PHP_ODBC_HAVE_FETCH_HASH
/** @param resource $statement */
#[\Until('8.4')]
function odbc_fetch_object($statement, int $row = -1): \stdClass|false
{
}
#ifdef PHP_ODBC_HAVE_FETCH_HASH
/** @param resource $statement */
#[\Since('8.4')]
function odbc_fetch_object($statement, ?int $row = null): \stdClass|false
{
}