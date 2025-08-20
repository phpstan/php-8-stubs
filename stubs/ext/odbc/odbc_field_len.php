<?php 

/** @param resource $statement */
#[\Until('8.4')]
function odbc_field_len($statement, int $field): int|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_field_len(\Odbc\Result $statement, int $field): int|false
{
}
#[\Since('8.5')]
function odbc_field_len(\Odbc\Result $statement, int $field): int|false
{
}