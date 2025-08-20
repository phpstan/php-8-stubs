<?php 

#ifdef HAVE_EACCESS
#[\Since('8.3')]
#[\Until('8.4')]
function posix_eaccess(string $filename, int $flags = 0): bool
{
}
#ifdef HAVE_EACCESS
#[\Since('8.4')]
#[\Until('8.5')]
function posix_eaccess(string $filename, int $flags = 0): bool
{
}
#ifdef HAVE_EACCESS
#[\Since('8.5')]
function posix_eaccess(string $filename, int $flags = 0): bool
{
}