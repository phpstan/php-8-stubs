<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_thread($imap, int $flags = SE_FREE): array|false
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_thread(\IMAP\Connection $imap, int $flags = SE_FREE): array|false
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_thread(\IMAP\Connection $imap, int $flags = SE_FREE): array|false
{
}
#[\Since('8.3')]
function imap_thread(\IMAP\Connection $imap, int $flags = SE_FREE): array|false
{
}