<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_renamemailbox($imap, string $from, string $to): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_renamemailbox(\IMAP\Connection $imap, string $from, string $to): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_renamemailbox(\IMAP\Connection $imap, string $from, string $to): bool
{
}
#[\Since('8.3')]
function imap_renamemailbox(\IMAP\Connection $imap, string $from, string $to): bool
{
}