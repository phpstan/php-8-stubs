<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_fetchheader($imap, int $message_num, int $flags = 0): string|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_fetchheader(\IMAP\Connection $imap, int $message_num, int $flags = 0): string|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_fetchheader(\IMAP\Connection $imap, int $message_num, int $flags = 0): string|false
{
}
#[\Since('8.3')]
function imap_fetchheader(\IMAP\Connection $imap, int $message_num, int $flags = 0): string|false
{
}