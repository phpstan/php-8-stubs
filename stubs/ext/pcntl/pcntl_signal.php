<?php 

/** @param callable|int $handler */
#[\Until('8.6')]
function pcntl_signal(int $signal, $handler, bool $restart_syscalls = true): bool
{
}
/** @param callable|int $handler */
#[\Since('8.6')]
function pcntl_signal(int $signal, $handler, ?bool $restart_syscalls = null): bool
{
}