<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_mkdir($ftp, string $directory): string|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string|false
{
}
#[\Since('8.5')]
function ftp_mkdir(\FTP\Connection $ftp, string $directory): string|false
{
}