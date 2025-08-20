<?php 

/**
 * @param string|array $key
 * @param int|resource $skip actually this parameter is optional, not $dba
 * @param resource $dba
 */
#[\Until('8.2')]
function dba_fetch($key, $skip, $dba = UNKNOWN): string|false
{
}
/**
 * @param resource|int $dba overloaded legacy signature has params flipped
 * @param resource|int $skip overloaded legacy signature has params flipped
 */
#[\Since('8.2')]
#[\Until('8.3')]
function dba_fetch(string|array $key, $dba, $skip = 0): string|false
{
}
/**
 * @param resource|int $dba overloaded legacy signature has params flipped
 * @param resource|int $skip overloaded legacy signature has params flipped
 */
#[\Since('8.3')]
#[\Until('8.4')]
function dba_fetch(string|array $key, $dba, $skip = 0): string|false
{
}
/**
 * @param Dba\Connection|int $dba overloaded legacy signature has params flipped
 * @param Dba\Connection|int $skip overloaded legacy signature has params flipped
 */
#[\Since('8.4')]
#[\Until('8.5')]
function dba_fetch(string|array $key, $dba, $skip = 0): string|false
{
}
/**
 * @param Dba\Connection|int $dba overloaded legacy signature has params flipped
 * @param Dba\Connection|int $skip overloaded legacy signature has params flipped
 */
#[\Since('8.5')]
function dba_fetch(string|array $key, $dba, $skip = 0): string|false
{
}