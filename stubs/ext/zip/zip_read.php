<?php 

/**
 * @param resource $zip
 * @return resource|false
 * @deprecated
 */
#[\Until('8.4')]
function zip_read($zip)
{
}
/**
 * @param resource $zip
 * @return resource|false
 */
#[\Deprecated(since: '8.0', message: 'use ZipArchive::statIndex() instead')]
#[\Since('8.4')]
function zip_read($zip)
{
}