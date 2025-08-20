<?php 

#[\Until('8.4')]
function mysqli_report(int $flags): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function mysqli_report(int $flags): true
{
}
#[\Since('8.5')]
function mysqli_report(int $flags): true
{
}