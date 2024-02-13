<?php 

/** @param resource $odbc */
#[\Until('8.2')]
function odbc_autocommit($odbc, bool $enable = false): int|bool
{
}
/** @param resource $odbc */
#[\Since('8.2')]
function odbc_autocommit($odbc, ?bool $enable = null): int|bool
{
}