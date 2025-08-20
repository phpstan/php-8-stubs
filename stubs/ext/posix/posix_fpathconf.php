<?php 

#endif
#ifdef HAVE_FPATHCONF
/** @param resource|int $file_descriptor */
#[\Since('8.3')]
#[\Until('8.4')]
function posix_fpathconf($file_descriptor, int $name): int|false
{
}
#endif
#ifdef HAVE_FPATHCONF
/** @param resource|int $file_descriptor */
#[\Since('8.4')]
#[\Until('8.5')]
function posix_fpathconf($file_descriptor, int $name): int|false
{
}
#endif
#ifdef HAVE_FPATHCONF
/** @param resource|int $file_descriptor */
#[\Since('8.5')]
function posix_fpathconf($file_descriptor, int $name): int|false
{
}