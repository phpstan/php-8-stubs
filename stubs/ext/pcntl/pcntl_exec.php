<?php 

#[\Until('8.5')]
function pcntl_exec(string $path, array $args = [], array $env_vars = []): bool
{
}
#[\Since('8.5')]
function pcntl_exec(string $path, array $args = [], array $env_vars = []): false
{
}