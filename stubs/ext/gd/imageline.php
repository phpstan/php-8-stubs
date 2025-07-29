<?php 

#[\Until('8.5')]
function imageline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): bool
{
}
#[\Since('8.5')]
function imageline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true
{
}