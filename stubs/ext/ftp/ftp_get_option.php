<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_get_option($ftp, int $option): int|bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_get_option(\FTP\Connection $ftp, int $option): int|bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_get_option(\FTP\Connection $ftp, int $option): int|bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_get_option(\FTP\Connection $ftp, int $option): int|bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_get_option(\FTP\Connection $ftp, int $option): int|bool
{
}
#[\Since('8.5')]
function ftp_get_option(\FTP\Connection $ftp, int $option): int|bool
{
}