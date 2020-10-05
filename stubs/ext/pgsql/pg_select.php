<?php 

/** @param resource $connection */
function pg_select($connection, string $table_name, array $ids, int $options = 0, int $result_type = PGSQL_ASSOC) : array|string|false
{
}