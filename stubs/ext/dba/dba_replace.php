<?php 

/**
 * @param string|array $key
 * @param resource $dba
 */
#[\Until('8.2')]
function dba_replace($key, string $value, $dba): bool
{
}
/** @param resource $dba */
#[\Since('8.2')]
#[\Until('8.3')]
function dba_replace(string|array $key, string $value, $dba): bool
{
}
/** @param resource $dba */
#[\Since('8.3')]
#[\Until('8.4')]
function dba_replace(string|array $key, string $value, $dba): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function dba_replace(string|array $key, string $value, \Dba\Connection $dba): bool
{
}
#[\Since('8.5')]
function dba_replace(string|array $key, string $value, \Dba\Connection $dba): bool
{
}