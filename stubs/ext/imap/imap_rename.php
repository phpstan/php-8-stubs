<?php 

/**
 * @param resource $imap
 * @alias imap_renamemailbox
 */
#[\Until('8.1')]
function imap_rename($imap, string $from, string $to): bool
{
}
/** @alias imap_renamemailbox */
#[\Since('8.1')]
#[\Until('8.2')]
function imap_rename(\IMAP\Connection $imap, string $from, string $to): bool
{
}
/** @alias imap_renamemailbox */
#[\Since('8.2')]
#[\Until('8.3')]
function imap_rename(\IMAP\Connection $imap, string $from, string $to): bool
{
}
/** @alias imap_renamemailbox */
#[\Since('8.3')]
function imap_rename(\IMAP\Connection $imap, string $from, string $to): bool
{
}