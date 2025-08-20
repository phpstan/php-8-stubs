<?php 

#[\Until('8.3')]
function mysqli_field_seek(\mysqli_result $result, int $index): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function mysqli_field_seek(\mysqli_result $result, int $index): true
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function mysqli_field_seek(\mysqli_result $result, int $index): true
{
}
#[\Since('8.5')]
function mysqli_field_seek(\mysqli_result $result, int $index): true
{
}