<?php 

#[\Until('8.6')]
function mysqli_stmt_init(\mysqli $mysql): \mysqli_stmt|false
{
}
/** @refcount 1 */
#[\Deprecated(since: '8.6', message: 'use mysqli_prepare() instead')]
#[\Since('8.6')]
function mysqli_stmt_init(\mysqli $mysql): \mysqli_stmt|false
{
}