<?php 

#[\Until('8.5')]
function imagefilledarc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color, int $style): bool
{
}
#[\Since('8.5')]
function imagefilledarc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color, int $style): true
{
}