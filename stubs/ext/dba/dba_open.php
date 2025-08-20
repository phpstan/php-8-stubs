<?php 

/**
 * @param string $path
 * @param string $mode
 * @param string $handler
 * @param string $handler_params
 * @return resource|false
 */
#[\Until('8.2')]
function dba_open($path, $mode, $handler = UNKNOWN, ...$handler_params)
{
}
/** @return resource|false */
#[\Since('8.2')]
#[\Until('8.3')]
function dba_open(string $path, string $mode, ?string $handler = null, int $permission = 0644, int $map_size = 0, ?int $flags = null)
{
}
/** @return resource|false */
#[\Since('8.3')]
#[\Until('8.4')]
function dba_open(string $path, string $mode, ?string $handler = null, int $permission = 0644, int $map_size = 0, ?int $flags = null)
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function dba_open(string $path, string $mode, ?string $handler = null, int $permission = 0644, int $map_size = 0, ?int $flags = null): \Dba\Connection|false
{
}
#[\Since('8.5')]
function dba_open(string $path, string $mode, ?string $handler = null, int $permission = 0644, int $map_size = 0, ?int $flags = null): \Dba\Connection|false
{
}