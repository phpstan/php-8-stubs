<?php 

/**
 * @param resource $socket
 */
#[\Since('8.4')]
#[\Until('8.5')]
function pg_socket_poll($socket, int $read, int $write, int $timeout = -1): int
{
}
/**
 * @param resource $socket
 */
#[\Since('8.5')]
function pg_socket_poll($socket, int $read, int $write, int $timeout = -1): int
{
}