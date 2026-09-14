<?php 

#endif
#[\Until('8.6')]
function register_tick_function(callable $callback, mixed ...$args): bool
{
}
#endif
#[\Since('8.6')]
function register_tick_function(callable $callback, mixed ...$args): true
{
}