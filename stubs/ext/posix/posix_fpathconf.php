<?php 

#endif
#ifdef HAVE_FPATHCONF
/** @param resource|int $file_descriptor */
#[\Since('8.2')]
function posix_fpathconf($file_descriptor, int $name): int|false
{
}