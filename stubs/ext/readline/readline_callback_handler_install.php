<?php 

#if HAVE_RL_CALLBACK_READ_CHAR
#[\Until('8.5')]
function readline_callback_handler_install(string $prompt, callable $callback): bool
{
}
#ifdef HAVE_RL_CALLBACK_READ_CHAR
#[\Since('8.5')]
function readline_callback_handler_install(string $prompt, callable $callback): true
{
}