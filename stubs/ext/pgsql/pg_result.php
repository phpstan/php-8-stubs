<?php 

/**
 * @param resource $result
 * @param string|int $row_number
 * @alias pg_fetch_result
 * @deprecated
 */
function pg_result($result, $row_number, string|int $field = UNKNOWN) : string|false|null
{
}