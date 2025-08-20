<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_set_quota($imap, string $quota_root, int $mailbox_size): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_set_quota(\IMAP\Connection $imap, string $quota_root, int $mailbox_size): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_set_quota(\IMAP\Connection $imap, string $quota_root, int $mailbox_size): bool
{
}
#[\Since('8.3')]
function imap_set_quota(\IMAP\Connection $imap, string $quota_root, int $mailbox_size): bool
{
}