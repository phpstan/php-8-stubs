<?php 

#endif
#ifdef HAVE_GETRUSAGE
/**
 * @return array<string, int>|false
 * @refcount 1
 */
function getrusage(int $mode = 0) : array|false
{
}