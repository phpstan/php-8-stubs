<?php 

#[\Until('8.4')]
function bindtextdomain(string $domain, ?string $directory): string|false
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function bindtextdomain(string $domain, ?string $directory = null): string|false
{
}
/** @refcount 1 */
#[\Since('8.5')]
function bindtextdomain(string $domain, ?string $directory = null): string|false
{
}