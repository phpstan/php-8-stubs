<?php 

#[\Until('8.5')]
function imagearc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color): bool
{
}
#[\Since('8.5')]
function imagearc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color): true
{
}