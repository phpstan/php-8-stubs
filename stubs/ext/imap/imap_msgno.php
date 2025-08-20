<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_msgno($imap, int $message_uid): int
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_msgno(\IMAP\Connection $imap, int $message_uid): int
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_msgno(\IMAP\Connection $imap, int $message_uid): int
{
}
#[\Since('8.3')]
function imap_msgno(\IMAP\Connection $imap, int $message_uid): int
{
}