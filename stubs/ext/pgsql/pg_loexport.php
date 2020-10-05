<?php 

/**
 * @param resource|string|int $connection
 * @param string|int $large_object_id
 * @param string|int $filename
 * @return resource|false
 * @alias pg_lo_export
 * @deprecated
 */
function pg_loexport($connection, $large_object_id = UNKNOWN, $filename = UNKNOWN) : bool
{
}