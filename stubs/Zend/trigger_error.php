<?php 

#[\Until('8.2')]
function trigger_error(string $message, int $error_level = E_USER_NOTICE): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function trigger_error(string $message, int $error_level = E_USER_NOTICE): true
{
}
#[\Since('8.3')]
function trigger_error(string $message, int $error_level = E_USER_NOTICE): bool
{
}