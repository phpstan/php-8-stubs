<?php 

/**
 * @param resource $ftp
 * @alias ftp_close
 */
#[\Until('8.1')]
function ftp_quit($ftp): bool
{
}
/** @alias ftp_close */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_quit(\FTP\Connection $ftp): bool
{
}
/** @alias ftp_close */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_quit(\FTP\Connection $ftp): bool
{
}
/** @alias ftp_close */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_quit(\FTP\Connection $ftp): bool
{
}
/** @alias ftp_close */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_quit(\FTP\Connection $ftp): bool
{
}
/** @alias ftp_close */
#[\Since('8.5')]
function ftp_quit(\FTP\Connection $ftp): bool
{
}