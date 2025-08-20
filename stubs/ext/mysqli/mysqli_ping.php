<?php 

#[\Until('8.4')]
function mysqli_ping(\mysqli $mysql): bool
{
}
#[\Deprecated(since: '8.4', message: 'because the reconnect feature has been removed in PHP 8.2 and this function is now redundant')]
#[\Since('8.4')]
function mysqli_ping(\mysqli $mysql): bool
{
}