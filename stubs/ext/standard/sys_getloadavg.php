<?php 

#endif
#ifdef HAVE_GETLOADAVG
/**
 * @return array<int, float>|false
 * @refcount 1
 */
function sys_getloadavg() : array|false
{
}