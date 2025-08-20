<?php 

#[\Until('8.4')]
function mhash(int $algo, string $data, ?string $key = null): string|false
{
}
/**
 * @refcount 1
 */
#[\Deprecated(since: '8.1')]
#[\Since('8.4')]
function mhash(int $algo, string $data, ?string $key = null): string|false
{
}