<?php 

/**
 * @param resource $imap
 */
#[\Until('8.1')]
function imap_close($imap, int $flags = 0): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_close(\IMAP\Connection $imap, int $flags = 0): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_close(\IMAP\Connection $imap, int $flags = 0): bool
{
}
#[\Since('8.3')]
function imap_close(\IMAP\Connection $imap, int $flags = 0): true
{
}