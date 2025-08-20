<?php 

#[\Until('8.4')]
function mysqli_kill(\mysqli $mysql, int $process_id): bool
{
}
#[\Deprecated(since: '8.4', message: 'use KILL CONNECTION/QUERY SQL statement instead')]
#[\Since('8.4')]
function mysqli_kill(\mysqli $mysql, int $process_id): bool
{
}