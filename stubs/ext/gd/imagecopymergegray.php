<?php 

#[\Until('8.5')]
function imagecopymergegray(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): bool
{
}
#[\Since('8.5')]
function imagecopymergegray(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true
{
}