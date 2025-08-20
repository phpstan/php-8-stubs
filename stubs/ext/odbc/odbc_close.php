<?php 

/** @param resource $odbc */
#[\Until('8.4')]
function odbc_close($odbc): void
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_close(\Odbc\Connection $odbc): void
{
}
#[\Since('8.5')]
function odbc_close(\Odbc\Connection $odbc): void
{
}