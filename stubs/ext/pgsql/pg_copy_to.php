<?php 

/** @param resource $connection */
function pg_copy_to($connection, string $table_name, string $delimiter = "\t", string $null_as = "\\\\N") : array|false
{
}