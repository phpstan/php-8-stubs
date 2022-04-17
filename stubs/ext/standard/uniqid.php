<?php 

/* uniqid.c */
#ifdef HAVE_GETTIMEOFDAY
/** @refcount 1 */
function uniqid(string $prefix = "", bool $more_entropy = false) : string
{
}