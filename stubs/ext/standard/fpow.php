<?php 

/**
 * @compile-time-eval
 */
#[\Since('8.4')]
#[\Until('8.5')]
function fpow(float $num, float $exponent): float
{
}
/**
 * @compile-time-eval
 */
#[\Since('8.5')]
function fpow(float $num, float $exponent): float
{
}