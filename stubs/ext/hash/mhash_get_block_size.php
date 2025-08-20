<?php 

#ifdef PHP_MHASH_BC
#[\Until('8.4')]
function mhash_get_block_size(int $algo): int|false
{
}
#ifdef PHP_MHASH_BC
#[\Deprecated(since: '8.1')]
#[\Since('8.4')]
#[\Until('8.5')]
function mhash_get_block_size(int $algo): int|false
{
}
#ifdef PHP_MHASH_BC
#[\Deprecated(since: '8.1')]
#[\Since('8.5')]
function mhash_get_block_size(int $algo): int|false
{
}