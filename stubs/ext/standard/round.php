<?php 

#[\Until('8.4')]
function round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
{
}
/** @compile-time-eval */
#[\Since('8.4')]
#[\Until('8.5')]
function round(int|float $num, int $precision = 0, int|\RoundingMode $mode = RoundingMode::HalfAwayFromZero): float
{
}
/** @compile-time-eval */
#[\Since('8.5')]
function round(int|float $num, int $precision = 0, int|\RoundingMode $mode = RoundingMode::HalfAwayFromZero): float
{
}