<?php 

/** @alias trigger_error */
#[\Until('8.2')]
function user_error(string $message, int $error_level = E_USER_NOTICE): bool
{
}
/** @alias trigger_error */
#[\Since('8.2')]
#[\Until('8.3')]
function user_error(string $message, int $error_level = E_USER_NOTICE): true
{
}
/** @alias trigger_error */
#[\Since('8.3')]
function user_error(string $message, int $error_level = E_USER_NOTICE): bool
{
}