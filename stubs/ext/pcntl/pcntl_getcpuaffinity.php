<?php 

#endif
#ifdef HAVE_SCHED_SETAFFINITY
#[\Since('8.4')]
#[\Until('8.5')]
function pcntl_getcpuaffinity(?int $process_id = null): array|false
{
}
#endif
#ifdef HAVE_SCHED_SETAFFINITY
#[\Since('8.5')]
function pcntl_getcpuaffinity(?int $process_id = null): array|false
{
}