<?php 

/**
 * @param resource $finfo
 */
#[\Until('8.1')]
function finfo_close($finfo): bool
{
}
#[\Since('8.1')]
#[\Until('8.2')]
function finfo_close(\finfo $finfo): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function finfo_close(\finfo $finfo): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function finfo_close(\finfo $finfo): bool
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function finfo_close(\finfo $finfo): bool
{
}
#[\Deprecated(since: '8.5', message: 'as finfo objects are freed automatically')]
#[\Since('8.5')]
function finfo_close(\finfo $finfo): true
{
}