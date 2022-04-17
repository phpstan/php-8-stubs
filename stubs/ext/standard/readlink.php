<?php 

/* link.c */
#if defined(HAVE_SYMLINK) || defined(PHP_WIN32)
/** @refcount 1 */
function readlink(string $path) : string|false
{
}