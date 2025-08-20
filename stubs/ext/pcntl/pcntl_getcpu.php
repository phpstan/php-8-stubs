<?php 

#endif
#ifdef HAVE_SCHED_GETCPU
#[\Since('8.4')]
#[\Until('8.5')]
function pcntl_getcpu(): int
{
}
#endif
#ifdef HAVE_SCHED_GETCPU
#[\Since('8.5')]
function pcntl_getcpu(): int
{
}