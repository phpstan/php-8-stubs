<?php 

#ifdef HAVE_GETPRIORITY
function pcntl_getpriority(?int $pid = null, int $process_identifier = PRIO_PROCESS) : int|false
{
}