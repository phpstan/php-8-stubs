<?php 

#ifdef HAVE_FTP_SSL
/** @return resource|false */
#[\Until('8.1')]
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90)
{
}
#ifdef HAVE_FTP_SSL
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false
{
}
#ifdef HAVE_FTP_SSL
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false
{
}
#ifdef HAVE_FTP_SSL
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false
{
}
#ifdef HAVE_FTP_SSL
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false
{
}
#ifdef HAVE_FTP_SSL
#[\Since('8.5')]
function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): \FTP\Connection|false
{
}