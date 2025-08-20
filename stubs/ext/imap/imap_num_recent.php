<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_num_recent($imap): int
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_num_recent(\IMAP\Connection $imap): int
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_num_recent(\IMAP\Connection $imap): int
{
}
#[\Since('8.3')]
function imap_num_recent(\IMAP\Connection $imap): int
{
}