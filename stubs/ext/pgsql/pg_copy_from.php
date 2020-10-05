<?php 

/** @param resource $connection */
function pg_copy_from($connection, string $table_name, array $rows, string $delimiter = "\t", string $null_as = "\\\\N") : bool
{
}