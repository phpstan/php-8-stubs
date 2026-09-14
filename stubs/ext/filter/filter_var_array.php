<?php 

#[\Until('8.6')]
function filter_var_array(array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null
{
}
/** @refcount 1 */
#[\Since('8.6')]
function filter_var_array(array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false
{
}