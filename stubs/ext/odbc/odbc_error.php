<?php 

/** @param resource|null $odbc */
#[\Until('8.4')]
function odbc_error($odbc = null): string
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_error(?\Odbc\Connection $odbc = null): string
{
}
#[\Since('8.5')]
function odbc_error(?\Odbc\Connection $odbc = null): string
{
}