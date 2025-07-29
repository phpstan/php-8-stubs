<?php 

#[\Until('8.5')]
function imageflip(\GdImage $image, int $mode): bool
{
}
#[\Since('8.5')]
function imageflip(\GdImage $image, int $mode): true
{
}