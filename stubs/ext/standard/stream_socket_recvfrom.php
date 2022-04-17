<?php 

/**
 * @param resource $socket
 * @param string|null $address
 * @refcount 1
 */
function stream_socket_recvfrom($socket, int $length, int $flags = 0, &$address = null) : string|false
{
}