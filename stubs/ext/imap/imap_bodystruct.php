<?php 

/**
 * @param resource $imap
 * @return stdClass|false
 */
#[\Until('8.1')]
function imap_bodystruct($imap, int $message_num, string $section)
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_bodystruct(\IMAP\Connection $imap, int $message_num, string $section): \stdClass|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_bodystruct(\IMAP\Connection $imap, int $message_num, string $section): \stdClass|false
{
}
#[\Since('8.3')]
function imap_bodystruct(\IMAP\Connection $imap, int $message_num, string $section): \stdClass|false
{
}