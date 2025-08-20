<?php 

/** @param resource $statement */
#[\Until('8.4')]
function odbc_num_rows($statement): int
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_num_rows(\Odbc\Result $statement): int
{
}
#[\Since('8.5')]
function odbc_num_rows(\Odbc\Result $statement): int
{
}