<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_setacl($imap, string $mailbox, string $user_id, string $rights): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_setacl(\IMAP\Connection $imap, string $mailbox, string $user_id, string $rights): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_setacl(\IMAP\Connection $imap, string $mailbox, string $user_id, string $rights): bool
{
}
#[\Since('8.3')]
function imap_setacl(\IMAP\Connection $imap, string $mailbox, string $user_id, string $rights): bool
{
}