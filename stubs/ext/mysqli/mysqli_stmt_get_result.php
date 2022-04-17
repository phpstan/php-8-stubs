<?php 

#if defined(MYSQLI_USE_MYSQLND)
/** @refcount 1 */
function mysqli_stmt_get_result(\mysqli_stmt $statement) : \mysqli_result|false
{
}