<?php 

/**
 * @param resource $zip_entry
 * @deprecated
 */
#[\Until('8.4')]
function zip_entry_name($zip_entry): string|false
{
}
/**
 * @param resource $zip_entry
 */
#[\Deprecated(since: '8.0', message: 'use ZipArchive::statIndex() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function zip_entry_name($zip_entry): string|false
{
}
/**
 * @param resource $zip_entry
 */
#[\Deprecated(since: '8.0', message: 'use ZipArchive::statIndex() instead')]
#[\Since('8.5')]
function zip_entry_name($zip_entry): string|false
{
}