<?php 

/**
 * @param resource $connection
 * @param string|int $large_object_id
 * @return resource|false
 * @alias pg_lo_open
 * @deprecated
 */
function pg_loopen($connection, $large_object_id = UNKNOWN, string $mode = UNKNOWN)
{
}