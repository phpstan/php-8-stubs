<?php 

#endif
#ifdef HAVE_SETPRIORITY
function pcntl_setpriority(int $priority, ?int $pid = null, int $process_identifier = PRIO_PROCESS) : bool
{
}