<?php 

/** @param resource $odbc */
#[\Until('8.4')]
function odbc_commit($odbc): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_commit(\Odbc\Connection $odbc): bool
{
}
#[\Since('8.5')]
function odbc_commit(\Odbc\Connection $odbc): bool
{
}