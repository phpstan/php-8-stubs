<?php 

/** @generate-function-entries */
/**
 * @param string $path
 * @param string $mode
 * @param string $handler
 * @param string $handler_params
 * @return resource|false
 */
#[\Until('8.2')]
function dba_popen($path, $mode, $handler = UNKNOWN, ...$handler_params)
{
}
/** @generate-class-entries */
/** @return resource|false */
#[\Since('8.2')]
function dba_popen(string $path, string $mode, ?string $handler = null, int $permission = 0644, int $map_size = 0)
{
}