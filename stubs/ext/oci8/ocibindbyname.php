<?php 

/**
 * @param resource $statement_resource
 * @alias oci_bind_by_name
 * @deprecated
 */
function ocibindbyname($statement_resource, string $column_name, mixed &$variable, int $maximum_length = -1, int $type = 0) : bool
{
}