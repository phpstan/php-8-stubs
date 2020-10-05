<?php 

#endif
#ifdef HAVE_MKNOD
function posix_mknod(string $pathname, int $mode, int $major = 0, int $minor = 0) : bool
{
}