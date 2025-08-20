<?php 

/**
 * @param resource $imap
 * @param resource|string|int $file
 */
#[\Until('8.1')]
function imap_savebody($imap, $file, int $message_num, string $section = "", int $flags = 0): bool
{
}
/** @param resource|string|int $file */
#[\Since('8.1')]
#[\Until('8.2')]
function imap_savebody(\IMAP\Connection $imap, $file, int $message_num, string $section = "", int $flags = 0): bool
{
}
/** @param resource|string|int $file */
#[\Since('8.2')]
#[\Until('8.3')]
function imap_savebody(\IMAP\Connection $imap, $file, int $message_num, string $section = "", int $flags = 0): bool
{
}
/** @param resource|string|int $file */
#[\Since('8.3')]
function imap_savebody(\IMAP\Connection $imap, $file, int $message_num, string $section = "", int $flags = 0): bool
{
}