<?php 

/** @param resource $dba */
#[\Until('8.4')]
function dba_close($dba): void
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function dba_close(\Dba\Connection $dba): void
{
}
#[\Since('8.5')]
function dba_close(\Dba\Connection $dba): void
{
}