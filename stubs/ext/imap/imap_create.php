<?php 

/**
 * @param resource $imap
 * @alias imap_createmailbox
 */
#[\Until('8.1')]
function imap_create($imap, string $mailbox): bool
{
}
/** @alias imap_createmailbox */
#[\Since('8.1')]
#[\Until('8.2')]
function imap_create(\IMAP\Connection $imap, string $mailbox): bool
{
}
/** @alias imap_createmailbox */
#[\Since('8.2')]
#[\Until('8.3')]
function imap_create(\IMAP\Connection $imap, string $mailbox): bool
{
}
/** @alias imap_createmailbox */
#[\Since('8.3')]
function imap_create(\IMAP\Connection $imap, string $mailbox): bool
{
}