<?php 

#[\Until('8.1')]
function imagecharup(\GdImage $image, int $font, int $x, int $y, string $char, int $color): bool
{
}
#[\Since('8.1')]
#[\Until('8.5')]
function imagecharup(\GdImage $image, \GdFont|int $font, int $x, int $y, string $char, int $color): bool
{
}
#[\Since('8.5')]
function imagecharup(\GdImage $image, \GdFont|int $font, int $x, int $y, string $char, int $color): true
{
}