<?php 

/** @param resource|null $odbc */
#[\Until('8.4')]
function odbc_errormsg($odbc = null): string
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_errormsg(?\Odbc\Connection $odbc = null): string
{
}
#[\Since('8.5')]
function odbc_errormsg(?\Odbc\Connection $odbc = null): string
{
}