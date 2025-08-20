<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_nb_put($ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false
{
}
#[\Since('8.5')]
function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = FTP_BINARY, int $offset = 0): int|false
{
}