<?php 

/**
 * @param resource $imap
 */
#[\Until('8.1')]
function imap_gc($imap, int $flags): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_gc(\IMAP\Connection $imap, int $flags): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_gc(\IMAP\Connection $imap, int $flags): bool
{
}
#[\Since('8.3')]
function imap_gc(\IMAP\Connection $imap, int $flags): true
{
}