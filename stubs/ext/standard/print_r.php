<?php 

#[\Until('8.4')]
function print_r(mixed $value, bool $return = false): string|bool
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function print_r(mixed $value, bool $return = false): string|true
{
}
/** @refcount 1 */
#[\Since('8.5')]
function print_r(mixed $value, bool $return = false): string|true
{
}