<?php 

#ifdef HAVE_GETRLIMIT
/**
 * @return array<string, int|string>|false
 * @refcount 1
 */
function posix_getrlimit() : array|false
{
}