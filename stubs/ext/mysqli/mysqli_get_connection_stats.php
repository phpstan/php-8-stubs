<?php 

#if defined(MYSQLI_USE_MYSQLND)
/**
 * @return array<string, mixed>
 * @refcount 1
 */
function mysqli_get_connection_stats(\mysqli $mysql) : array
{
}