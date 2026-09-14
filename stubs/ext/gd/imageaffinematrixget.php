<?php 

/** @param array|float $options */
#[\Until('8.6')]
function imageaffinematrixget(int $type, $options): array|false
{
}
/**
 * @refcount 1
 * @return array<int, float>|false
 */
#[\Since('8.6')]
function imageaffinematrixget(int $type, array|float $options): array|false
{
}