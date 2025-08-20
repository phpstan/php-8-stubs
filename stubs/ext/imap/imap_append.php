<?php 

/** @param resource $imap */
#[\Until('8.1')]
function imap_append($imap, string $folder, string $message, ?string $options = null, ?string $internal_date = null): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function imap_append(\IMAP\Connection $imap, string $folder, string $message, ?string $options = null, ?string $internal_date = null): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function imap_append(\IMAP\Connection $imap, string $folder, string $message, ?string $options = null, ?string $internal_date = null): bool
{
}
#[\Since('8.3')]
function imap_append(\IMAP\Connection $imap, string $folder, string $message, ?string $options = null, ?string $internal_date = null): bool
{
}