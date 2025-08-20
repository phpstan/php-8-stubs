<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_mailboxmsginfo($imap): \stdClass
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_mailboxmsginfo(\IMAP\Connection $imap): \stdClass
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_mailboxmsginfo(\IMAP\Connection $imap): \stdClass
{
}
#[\Since('8.3')]
function imap_mailboxmsginfo(\IMAP\Connection $imap): \stdClass
{
}