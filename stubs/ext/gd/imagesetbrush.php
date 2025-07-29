<?php 

#[\Until('8.5')]
function imagesetbrush(\GdImage $image, \GdImage $brush): bool
{
}
#[\Since('8.5')]
function imagesetbrush(\GdImage $image, \GdImage $brush): true
{
}