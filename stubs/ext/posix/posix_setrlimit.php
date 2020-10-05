<?php 

#endif
#ifdef HAVE_SETRLIMIT
function posix_setrlimit(int $resource, int $softlimit, int $hardlimit) : bool
{
}