<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_nlist($ftp, string $directory): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.5')]
function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false
{
}