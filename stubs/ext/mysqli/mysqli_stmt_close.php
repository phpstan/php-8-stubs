<?php 

#[\Until('8.2')]
function mysqli_stmt_close(\mysqli_stmt $statement): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function mysqli_stmt_close(\mysqli_stmt $statement): true
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function mysqli_stmt_close(\mysqli_stmt $statement): true
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function mysqli_stmt_close(\mysqli_stmt $statement): true
{
}
#[\Since('8.5')]
function mysqli_stmt_close(\mysqli_stmt $statement): true
{
}