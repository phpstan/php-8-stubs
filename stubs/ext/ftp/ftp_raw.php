<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_raw($ftp, string $command): ?array
{
}
/**
 * @return array<int, string>|null
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_raw(\FTP\Connection $ftp, string $command): ?array
{
}
/**
 * @return array<int, string>|null
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_raw(\FTP\Connection $ftp, string $command): ?array
{
}
/**
 * @return array<int, string>|null
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_raw(\FTP\Connection $ftp, string $command): ?array
{
}
/**
 * @return array<int, string>|null
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_raw(\FTP\Connection $ftp, string $command): ?array
{
}
/**
 * @return array<int, string>|null
 * @refcount 1
 */
#[\Since('8.5')]
function ftp_raw(\FTP\Connection $ftp, string $command): ?array
{
}