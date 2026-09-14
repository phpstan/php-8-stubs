<?php 

/** @alias is_float */
#[\Until('8.6')]
function is_double(mixed $value): bool
{
}
/** @alias is_float */
#[\Deprecated(message: "use is_float() instead", since: "8.6")]
#[\Since('8.6')]
function is_double(mixed $value): bool
{
}