<?php 

#ifdef HAVE_PATHCONF
#[\Since('8.3')]
#[\Until('8.4')]
function posix_pathconf(string $path, int $name): int|false
{
}
#ifdef HAVE_PATHCONF
#[\Since('8.4')]
#[\Until('8.5')]
function posix_pathconf(string $path, int $name): int|false
{
}
#ifdef HAVE_PATHCONF
#[\Since('8.5')]
function posix_pathconf(string $path, int $name): int|false
{
}