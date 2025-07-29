<?php 

#[\Until('8.5')]
function imageellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): bool
{
}
#[\Since('8.5')]
function imageellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true
{
}