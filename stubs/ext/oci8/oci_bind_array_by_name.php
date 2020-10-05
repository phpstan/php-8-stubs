<?php 

/** @param resource $statement_resource */
function oci_bind_array_by_name($statement_resource, string $column_name, mixed &$variable, int $maximum_array_length, int $maximum_item_length = -1, int $type = SQLT_AFC) : bool
{
}