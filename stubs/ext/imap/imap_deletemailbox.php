<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_deletemailbox($imap, string $mailbox): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_deletemailbox(\IMAP\Connection $imap, string $mailbox): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_deletemailbox(\IMAP\Connection $imap, string $mailbox): bool
{
}
#[\Since('8.3')]
function imap_deletemailbox(\IMAP\Connection $imap, string $mailbox): bool
{
}