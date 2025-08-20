<?php 

/**
 * @param resource $zip_entry
 * @deprecated
 */
#[\Until('8.4')]
function zip_entry_close($zip_entry): bool
{
}
/**
 * @param resource $zip_entry
 */
#[\Deprecated(since: '8.0')]
#[\Since('8.4')]
function zip_entry_close($zip_entry): bool
{
}