<?php 

#[\Until('8.4')]
function long2ip(int $ip): string|false
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function long2ip(int $ip): string
{
}
/** @refcount 1 */
#[\Since('8.5')]
function long2ip(int $ip): string
{
}