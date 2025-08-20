<?php 

#ifdef HAVE_GETRLIMIT
#[\Until('8.3')]
function posix_getrlimit(): array|false
{
}
#ifdef HAVE_GETRLIMIT
/**
 * @return array<int|string, int|string>|false
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function posix_getrlimit(?int $resource = null): array|false
{
}
#ifdef HAVE_GETRLIMIT
/**
 * @return array<int|string, int|string>|false
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function posix_getrlimit(?int $resource = null): array|false
{
}
#ifdef HAVE_GETRLIMIT
/**
 * @return array<int|string, int|string>|false
 * @refcount 1
 */
#[\Since('8.5')]
function posix_getrlimit(?int $resource = null): array|false
{
}