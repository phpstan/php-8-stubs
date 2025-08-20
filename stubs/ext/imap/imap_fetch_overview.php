<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_fetch_overview($imap, string $sequence, int $flags = 0): array|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_fetch_overview(\IMAP\Connection $imap, string $sequence, int $flags = 0): array|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_fetch_overview(\IMAP\Connection $imap, string $sequence, int $flags = 0): array|false
{
}
#[\Since('8.3')]
function imap_fetch_overview(\IMAP\Connection $imap, string $sequence, int $flags = 0): array|false
{
}