<?php 

/**
 * @param array $array
 * @param array|int $rest
 * @prefer-ref $array
 * @prefer-ref $rest
 */
#[\Until('8.5')]
function array_multisort(&$array, &...$rest): bool
{
}
/**
 * @param array $array
 * @param array|int $rest
 * @prefer-ref $array
 * @prefer-ref $rest
 */
#[\Since('8.5')]
function array_multisort(&$array, &...$rest): true
{
}