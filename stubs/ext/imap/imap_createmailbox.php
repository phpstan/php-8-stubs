<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_createmailbox($imap, string $mailbox): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_createmailbox(\IMAP\Connection $imap, string $mailbox): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_createmailbox(\IMAP\Connection $imap, string $mailbox): bool
{
}
#[\Since('8.3')]
function imap_createmailbox(\IMAP\Connection $imap, string $mailbox): bool
{
}