<?php 

/**
 * @param resource $statement_resource
 * @param array $output
 * @alias oci_fetch_all
 * @deprecated
 */
function ocifetchstatement($statement_resource, &$output, int $skip = 0, int $maximum_rows = -1, int $flags = 0) : int
{
}