<?php 

/** @alias floatval */
#[\Until('8.6')]
function doubleval(mixed $value): float
{
}
/** @alias floatval */
#[\Deprecated(message: "use floatval() instead", since: "8.6")]
#[\Since('8.6')]
function doubleval(mixed $value): float
{
}