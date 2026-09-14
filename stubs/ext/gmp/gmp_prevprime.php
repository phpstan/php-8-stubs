<?php 

#ifdef HAVE___GMPZ_PREVPRIME
/** @param bool $definitely_prime */
#[\Since('8.6')]
function gmp_prevprime(\GMP|int|string $num, &$definitely_prime = null): \GMP
{
}