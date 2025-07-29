<?php 

#[\Until('8.5')]
function imagesetthickness(\GdImage $image, int $thickness): bool
{
}
#[\Since('8.5')]
function imagesetthickness(\GdImage $image, int $thickness): true
{
}