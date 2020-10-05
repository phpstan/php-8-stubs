<?php 

#endif
#ifdef HAVE_STRUCT_SIGINFO_T
#if defined(HAVE_SIGWAITINFO) && defined(HAVE_SIGTIMEDWAIT)
/** @param array $info */
function pcntl_sigwaitinfo(array $set, &$info = []) : int|false
{
}