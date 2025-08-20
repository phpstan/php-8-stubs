<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_rmdir($ftp, string $directory): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool
{
}
#[\Since('8.5')]
function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool
{
}