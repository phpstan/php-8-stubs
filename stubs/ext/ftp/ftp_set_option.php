<?php 

/**
 * @param resource $ftp
 * @param int|bool $value
 */
#[\Until('8.1')]
function ftp_set_option($ftp, int $option, $value): bool
{
}
/** @param int|bool $value */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_set_option(\FTP\Connection $ftp, int $option, $value): bool
{
}
/** @param int|bool $value */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_set_option(\FTP\Connection $ftp, int $option, $value): bool
{
}
/** @param int|bool $value */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_set_option(\FTP\Connection $ftp, int $option, $value): bool
{
}
/** @param int|bool $value */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_set_option(\FTP\Connection $ftp, int $option, $value): bool
{
}
/** @param int|bool $value */
#[\Since('8.5')]
function ftp_set_option(\FTP\Connection $ftp, int $option, $value): true
{
}