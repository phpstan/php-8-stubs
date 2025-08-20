<?php 

/**
 * @param resource $ftp
 * @param resource $stream
 */
#[\Until('8.1')]
function ftp_nb_fput($ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int
{
}
/** @param resource $stream */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int
{
}
/** @param resource $stream */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int
{
}
/** @param resource $stream */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int
{
}
/** @param resource $stream */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int
{
}
/** @param resource $stream */
#[\Since('8.5')]
function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, $stream, int $mode = FTP_BINARY, int $offset = 0): int
{
}