<?php 

#endif
#ifdef HAVE_FORKX
#[\Since('8.2')]
#[\Until('8.3')]
function pcntl_forkx(int $flags): int
{
}
#endif
#ifdef HAVE_FORKX
#[\Since('8.3')]
#[\Until('8.4')]
function pcntl_forkx(int $flags): int
{
}
#endif
#ifdef HAVE_FORKX
#[\Since('8.4')]
#[\Until('8.5')]
function pcntl_forkx(int $flags): int
{
}
#endif
#ifdef HAVE_FORKX
#[\Since('8.5')]
function pcntl_forkx(int $flags): int
{
}