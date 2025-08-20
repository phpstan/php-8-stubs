<?php 

#[\Until('8.2')]
function mysqli_close(\mysqli $mysql): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function mysqli_close(\mysqli $mysql): true
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function mysqli_close(\mysqli $mysql): true
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function mysqli_close(\mysqli $mysql): true
{
}
#[\Since('8.5')]
function mysqli_close(\mysqli $mysql): true
{
}