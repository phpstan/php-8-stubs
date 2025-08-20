<?php 

/**
 * @param resource $zip_dp
 * @param resource $zip_entry
 * @deprecated
 */
#[\Until('8.4')]
function zip_entry_open($zip_dp, $zip_entry, string $mode = "rb"): bool
{
}
/**
 * @param resource $zip_dp
 * @param resource $zip_entry
 */
#[\Deprecated(since: '8.0')]
#[\Since('8.4')]
function zip_entry_open($zip_dp, $zip_entry, string $mode = "rb"): bool
{
}