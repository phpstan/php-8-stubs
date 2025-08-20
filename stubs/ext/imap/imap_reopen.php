<?php 

/**
 * @param resource $imap
 */
#[\Until('8.1')]
function imap_reopen($imap, string $mailbox, int $flags = 0, int $retries = 0): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_reopen(\IMAP\Connection $imap, string $mailbox, int $flags = 0, int $retries = 0): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_reopen(\IMAP\Connection $imap, string $mailbox, int $flags = 0, int $retries = 0): bool
{
}
#[\Since('8.3')]
function imap_reopen(\IMAP\Connection $imap, string $mailbox, int $flags = 0, int $retries = 0): bool
{
}