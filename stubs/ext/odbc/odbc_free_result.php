<?php 

/** @param resource $statement */
#[\Until('8.4')]
function odbc_free_result($statement): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_free_result(\Odbc\Result $statement): true
{
}
#[\Since('8.5')]
function odbc_free_result(\Odbc\Result $statement): true
{
}