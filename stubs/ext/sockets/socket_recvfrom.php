<?php 

/**
 * @param string $buf
 * @param string $name
 * @param int $port
 */
function socket_recvfrom(\Socket $socket, &$buf, int $len, int $flags, &$name, &$port = null) : int|false
{
}