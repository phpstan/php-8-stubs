<?php 

#ifdef HAVE_GETRLIMIT
/**
 * @refcount 1
 */
#[\Until('8.2')]
function posix_getrlimit(): array|false
{
}
#ifdef HAVE_GETRLIMIT
/**
 * @return array<int|string, int|string>|false
 * @refcount 1
 */
#[\Since('8.2')]
function posix_getrlimit(?int $resource = null): array|false
{
}