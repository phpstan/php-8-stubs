<?php 

/* microtime.c */
#ifdef HAVE_GETTIMEOFDAY
/** @refcount 1 */
function microtime(bool $as_float = false) : string|float
{
}