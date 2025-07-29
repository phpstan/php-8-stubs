<?php 

#[\Until('8.5')]
function imagesetclip(\GdImage $image, int $x1, int $y1, int $x2, int $y2): bool
{
}
#[\Since('8.5')]
function imagesetclip(\GdImage $image, int $x1, int $y1, int $x2, int $y2): true
{
}