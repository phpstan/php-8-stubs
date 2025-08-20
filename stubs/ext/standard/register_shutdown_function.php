<?php 

#[\Until('8.2')]
function register_shutdown_function(callable $callback, mixed ...$args): ?bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function register_shutdown_function(callable $callback, mixed ...$args): void
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function register_shutdown_function(callable $callback, mixed ...$args): void
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function register_shutdown_function(callable $callback, mixed ...$args): void
{
}
#[\Since('8.5')]
function register_shutdown_function(callable $callback, mixed ...$args): void
{
}