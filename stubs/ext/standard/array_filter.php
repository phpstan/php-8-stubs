<?php 

#[\Until('8.6')]
function array_filter(array $array, ?callable $callback = null, int $mode = 0): array
{
}
#[\Since('8.6')]
function array_filter(array $array, ?callable $callback = null, int $mode = ARRAY_FILTER_USE_VALUE): array
{
}