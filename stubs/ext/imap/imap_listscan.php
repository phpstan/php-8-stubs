<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_listscan($imap, string $reference, string $pattern, string $content): array|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_listscan(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_listscan(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}
#[\Since('8.3')]
function imap_listscan(\IMAP\Connection $imap, string $reference, string $pattern, string $content): array|false
{
}