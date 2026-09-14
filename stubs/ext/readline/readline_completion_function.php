<?php 

#[\Until('8.6')]
function readline_completion_function(callable $callback): bool
{
}
#[\Since('8.6')]
function readline_completion_function(callable $callback): true
{
}