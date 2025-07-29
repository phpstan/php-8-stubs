<?php 

#[\Until('8.5')]
function imagecolordeallocate(\GdImage $image, int $color): bool
{
}
#[\Since('8.5')]
function imagecolordeallocate(\GdImage $image, int $color): true
{
}