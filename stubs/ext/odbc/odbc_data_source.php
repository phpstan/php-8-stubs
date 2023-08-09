<?php 

#ifdef HAVE_SQLDATASOURCES
/** @param resource $odbc */
#[\Until('8.1')]
function odbc_data_source($odbc, int $fetch_type): array|false
{
}
#ifdef HAVE_SQLDATASOURCES
/** @param resource $odbc */
#[\Since('8.1')]
function odbc_data_source($odbc, int $fetch_type): array|null|false
{
}