<?php 

#ifdef HAVE_SIGPROCMASK
/** @param array $oldset */
function pcntl_sigprocmask(int $how, array $set, &$oldset = null) : bool
{
}