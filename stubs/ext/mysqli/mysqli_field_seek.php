<?php 

#[\Until('8.2')]
function mysqli_field_seek(\mysqli_result $result, int $index): bool
{
}
#[\Since('8.2')]
function mysqli_field_seek(\mysqli_result $result, int $index): true
{
}