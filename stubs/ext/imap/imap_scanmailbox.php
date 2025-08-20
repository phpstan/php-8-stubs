<?php 

/**
 * @param resource $imap
 * @alias imap_listscan
 */
#[\Until('8.1')]
function imap_scanmailbox($imap, string $reference, string $pattern, string $content): array|false
{
}
/** @alias imap_listscan */
#[\Since('8.1')]
#[\Until('8.2')]
function imap_scanmailbox(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}
/** @alias imap_listscan */
#[\Since('8.2')]
#[\Until('8.3')]
function imap_scanmailbox(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}
/** @alias imap_listscan */
#[\Since('8.3')]
function imap_scanmailbox(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}