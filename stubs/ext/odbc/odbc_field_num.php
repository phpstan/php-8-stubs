<?php 

/** @param resource $statement */
#[\Until('8.4')]
function odbc_field_num($statement, string $field): int|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_field_num(\Odbc\Result $statement, string $field): int|false
{
}
#[\Since('8.5')]
function odbc_field_num(\Odbc\Result $statement, string $field): int|false
{
}