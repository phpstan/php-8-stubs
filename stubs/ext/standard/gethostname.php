<?php 

#endif
/* dns.c */
#ifdef HAVE_GETHOSTNAME
/** @refcount 1 */
function gethostname() : string|false
{
}