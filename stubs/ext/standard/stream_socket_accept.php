<?php 

/**
 * @param resource $socket
 * @param float $timeout
 * @param string $peer_name
 * @return resource|false
 */
#[\Until('8.1')]
function stream_socket_accept($socket, ?float $timeout = null, &$peer_name = null)
{
}
/**
 * @param resource $socket
 * @param string $peer_name
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function stream_socket_accept($socket, ?float $timeout = null, &$peer_name = null)
{
}
/**
 * @param resource $socket
 * @param string $peer_name
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function stream_socket_accept($socket, ?float $timeout = null, &$peer_name = null)
{
}
/**
 * @param resource $socket
 * @param string $peer_name
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function stream_socket_accept($socket, ?float $timeout = null, &$peer_name = null)
{
}
/**
 * @param resource $socket
 * @param string $peer_name
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function stream_socket_accept($socket, ?float $timeout = null, &$peer_name = null)
{
}
/**
 * @param resource $socket
 * @param string $peer_name
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.5')]
function stream_socket_accept($socket, ?float $timeout = null, &$peer_name = null)
{
}