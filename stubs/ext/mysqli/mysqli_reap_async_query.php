<?php 

#if defined(MYSQLI_USE_MYSQLND)
/** @refcount 1 */
function mysqli_reap_async_query(\mysqli $mysql) : \mysqli_result|bool
{
}