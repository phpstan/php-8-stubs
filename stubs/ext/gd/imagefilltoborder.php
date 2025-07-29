<?php 

#[\Until('8.5')]
function imagefilltoborder(\GdImage $image, int $x, int $y, int $border_color, int $color): bool
{
}
#[\Since('8.5')]
function imagefilltoborder(\GdImage $image, int $x, int $y, int $border_color, int $color): true
{
}