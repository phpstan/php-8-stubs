<?php 

/**
 * @param resource $finfo
 */
#[\Until('8.1')]
function finfo_close($finfo): bool
{
}
#[\Since('8.1')]
#[\Until('8.5')]
function finfo_close(\finfo $finfo): bool
{
}
#[\Since('8.5')]
function finfo_close(\finfo $finfo): true
{
}