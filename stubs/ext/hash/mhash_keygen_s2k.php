<?php 

#[\Until('8.4')]
function mhash_keygen_s2k(int $algo, string $password, string $salt, int $length): string|false
{
}
/**
 * @refcount 1
 */
#[\Deprecated(since: '8.1')]
#[\Since('8.4')]
function mhash_keygen_s2k(int $algo, string $password, string $salt, int $length): string|false
{
}