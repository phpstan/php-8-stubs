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
#[\Until('8.2')]
function odbc_data_source($odbc, int $fetch_type): array|null|false
{
}
#ifdef HAVE_SQLDATASOURCES
/** @param resource $odbc */
#[\Since('8.2')]
#[\Until('8.3')]
function odbc_data_source($odbc, int $fetch_type): array|null|false
{
}
#ifdef HAVE_SQLDATASOURCES
/** @param resource $odbc */
#[\Since('8.3')]
#[\Until('8.4')]
function odbc_data_source($odbc, int $fetch_type): array|null|false
{
}
#ifdef HAVE_SQLDATASOURCES
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_data_source(\Odbc\Connection $odbc, int $fetch_type): array|null|false
{
}
#ifdef HAVE_SQLDATASOURCES
#[\Since('8.5')]
function odbc_data_source(\Odbc\Connection $odbc, int $fetch_type): array|null|false
{
}