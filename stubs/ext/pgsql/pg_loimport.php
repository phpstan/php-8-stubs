<?php 

/**
 * @param resource|string $connection
 * @param string|int $filename
 * @param string|int $large_object_id
 * @return resource|false
 * @alias pg_lo_import
 * @deprecated
 */
function pg_loimport($connection, $filename = UNKNOWN, $large_object_id = UNKNOWN) : string|int|false
{
}