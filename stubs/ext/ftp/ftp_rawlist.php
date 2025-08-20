<?php 

/** @param resource $ftp */
#[\Until('8.1')]
function ftp_rawlist($ftp, string $directory, bool $recursive = false): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.5')]
function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false
{
}