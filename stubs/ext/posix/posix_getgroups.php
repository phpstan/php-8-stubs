<?php 

#endif
#ifdef HAVE_GETGROUPS
/**
 * @return array<int, int>|false
 * @refcount 1
 */
function posix_getgroups() : array|false
{
}