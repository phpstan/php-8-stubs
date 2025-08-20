<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_getacl($imap, string $mailbox): array|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_getacl(\IMAP\Connection $imap, string $mailbox): array|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_getacl(\IMAP\Connection $imap, string $mailbox): array|false
{
}
#[\Since('8.3')]
function imap_getacl(\IMAP\Connection $imap, string $mailbox): array|false
{
}