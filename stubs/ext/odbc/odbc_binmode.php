<?php 

/** @param resource $statement */
#[\Until('8.4')]
function odbc_binmode($statement, int $mode): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_binmode(\Odbc\Result $statement, int $mode): true
{
}
#[\Since('8.5')]
function odbc_binmode(\Odbc\Result $statement, int $mode): true
{
}