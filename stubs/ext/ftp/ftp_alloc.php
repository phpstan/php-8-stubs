<?php 

/**
 * @param resource $ftp
 * @param string $response
 */
#[\Until('8.1')]
function ftp_alloc($ftp, int $size, &$response = null): bool
{
}
/** @param string $response */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_alloc(\FTP\Connection $ftp, int $size, &$response = null): bool
{
}
/** @param string $response */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_alloc(\FTP\Connection $ftp, int $size, &$response = null): bool
{
}
/** @param string $response */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_alloc(\FTP\Connection $ftp, int $size, &$response = null): bool
{
}
/** @param string $response */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_alloc(\FTP\Connection $ftp, int $size, &$response = null): bool
{
}
/** @param string $response */
#[\Since('8.5')]
function ftp_alloc(\FTP\Connection $ftp, int $size, &$response = null): bool
{
}