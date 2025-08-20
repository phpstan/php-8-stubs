<?php 

/**
 * @param resource $stream
 * @alias stream_set_timeout
 */
#[\Until('8.5')]
function socket_set_timeout($stream, int $seconds, int $microseconds = 0): bool
{
}
/**
 * @param resource $stream
 * @alias stream_set_timeout
 */
#[\Deprecated(since: '8.5', message: "use stream_set_timeout() instead")]
#[\Since('8.5')]
function socket_set_timeout($stream, int $seconds, int $microseconds = 0): bool
{
}