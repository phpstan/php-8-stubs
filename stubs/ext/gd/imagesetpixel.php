<?php 

#[\Until('8.5')]
function imagesetpixel(\GdImage $image, int $x, int $y, int $color): bool
{
}
#[\Since('8.5')]
function imagesetpixel(\GdImage $image, int $x, int $y, int $color): true
{
}