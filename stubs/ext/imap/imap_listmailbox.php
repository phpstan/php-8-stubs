<?php 

/**
 * @param resource $imap
 * @alias imap_list
 */
#[\Until('8.1')]
function imap_listmailbox($imap, string $reference, string $pattern): array|false
{
}
/** @alias imap_list */
#[\Since('8.1')]
#[\Until('8.2')]
function imap_listmailbox(\IMAP\Connection $imap, string $reference, string $pattern): array|false
{
}
/** @alias imap_list */
#[\Since('8.2')]
#[\Until('8.3')]
function imap_listmailbox(\IMAP\Connection $imap, string $reference, string $pattern): array|false
{
}
/** @alias imap_list */
#[\Since('8.3')]
function imap_listmailbox(\IMAP\Connection $imap, string $reference, string $pattern): array|false
{
}