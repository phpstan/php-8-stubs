<?php 

/** @alias is_int */
#[\Until('8.6')]
function is_long(mixed $value): bool
{
}
/** @alias is_int */
#[\Deprecated(message: "use is_int() instead", since: "8.6")]
#[\Since('8.6')]
function is_long(mixed $value): bool
{
}