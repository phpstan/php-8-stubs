<?php 

/** @param resource $dba */
#[\Until('8.4')]
function dba_nextkey($dba): string|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function dba_nextkey(\Dba\Connection $dba): string|false
{
}
#[\Since('8.5')]
function dba_nextkey(\Dba\Connection $dba): string|false
{
}