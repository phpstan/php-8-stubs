<?php 

#endif
#ifdef HAVE_RFORK
#[\Since('8.1')]
#[\Until('8.2')]
function pcntl_rfork(int $flags, int $signal = 0): int
{
}
#endif
#ifdef HAVE_RFORK
#[\Since('8.2')]
#[\Until('8.3')]
function pcntl_rfork(int $flags, int $signal = 0): int
{
}
#endif
#ifdef HAVE_RFORK
#[\Since('8.3')]
#[\Until('8.4')]
function pcntl_rfork(int $flags, int $signal = 0): int
{
}
#endif
#ifdef HAVE_RFORK
#[\Since('8.4')]
#[\Until('8.5')]
function pcntl_rfork(int $flags, int $signal = 0): int
{
}
#endif
#ifdef HAVE_RFORK
#[\Since('8.5')]
function pcntl_rfork(int $flags, int $signal = 0): int
{
}