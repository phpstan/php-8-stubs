<?php 

#[\Until('8.4')]
function mysqli_refresh(\mysqli $mysql, int $flags): bool
{
}
#[\Deprecated(since: '8.4', message: 'use FLUSH SQL statement instead')]
#[\Since('8.4')]
function mysqli_refresh(\mysqli $mysql, int $flags): bool
{
}