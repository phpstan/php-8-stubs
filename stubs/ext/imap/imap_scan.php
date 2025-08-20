<?php 

/**
 * @param resource $imap
 * @alias imap_listscan
 */
#[\Until('8.1')]
function imap_scan($imap, string $reference, string $pattern, string $content): array|false
{
}
/** @alias imap_listscan */
#[\Since('8.1')]
#[\Until('8.2')]
function imap_scan(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}
/** @alias imap_listscan */
#[\Since('8.2')]
#[\Until('8.3')]
function imap_scan(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}
/** @alias imap_listscan */
#[\Since('8.3')]
function imap_scan(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}