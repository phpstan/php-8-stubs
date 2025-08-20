<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_headerinfo($imap, int $message_num, int $from_length = 0, int $subject_length = 0): \stdClass|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_headerinfo(\IMAP\Connection $imap, int $message_num, int $from_length = 0, int $subject_length = 0): \stdClass|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_headerinfo(\IMAP\Connection $imap, int $message_num, int $from_length = 0, int $subject_length = 0): \stdClass|false
{
}
#[\Since('8.3')]
function imap_headerinfo(\IMAP\Connection $imap, int $message_num, int $from_length = 0, int $subject_length = 0): \stdClass|false
{
}