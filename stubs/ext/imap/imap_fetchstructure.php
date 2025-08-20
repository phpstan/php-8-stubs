<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_fetchstructure($imap, int $message_num, int $flags = 0): \stdClass|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_fetchstructure(\IMAP\Connection $imap, int $message_num, int $flags = 0): \stdClass|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_fetchstructure(\IMAP\Connection $imap, int $message_num, int $flags = 0): \stdClass|false
{
}
#[\Since('8.3')]
function imap_fetchstructure(\IMAP\Connection $imap, int $message_num, int $flags = 0): \stdClass|false
{
}