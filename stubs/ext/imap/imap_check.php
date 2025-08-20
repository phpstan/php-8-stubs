<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_check($imap): \stdClass|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_check(\IMAP\Connection $imap): \stdClass|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_check(\IMAP\Connection $imap): \stdClass|false
{
}
#[\Since('8.3')]
function imap_check(\IMAP\Connection $imap): \stdClass|false
{
}