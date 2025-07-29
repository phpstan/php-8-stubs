<?php 

#[\Until('8.5')]
function timezone_transitions_get(\DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false
{
}
/**
 * @return array<int, array>|false
 * @refcount 1
 */
#[\Since('8.5')]
function timezone_transitions_get(\DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = 2147483647): array|false
{
}