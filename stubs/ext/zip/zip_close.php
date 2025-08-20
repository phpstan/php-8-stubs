<?php 

/**
 * @param resource $zip
 * @deprecated
 */
#[\Until('8.4')]
function zip_close($zip): void
{
}
/**
 * @param resource $zip
 */
#[\Deprecated(since: '8.0', message: 'use ZipArchive::close() instead')]
#[\Since('8.4')]
function zip_close($zip): void
{
}