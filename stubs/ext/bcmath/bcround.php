<?php 

/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function bcround(string $num, int $precision = 0, \RoundingMode $mode = RoundingMode::HalfAwayFromZero): string
{
}
/** @refcount 1 */
#[\Since('8.5')]
function bcround(string $num, int $precision = 0, \RoundingMode $mode = RoundingMode::HalfAwayFromZero): string
{
}