<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_append($ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool
{
}
#[\Since('8.5')]
function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY): bool
{
}