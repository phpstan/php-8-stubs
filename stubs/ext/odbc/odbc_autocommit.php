<?php 

/** @param resource $odbc */
#[\Until('8.3')]
function odbc_autocommit($odbc, bool $enable = false): int|bool
{
}
/** @param resource $odbc */
#[\Since('8.3')]
function odbc_autocommit($odbc, ?bool $enable = null): int|bool
{
}