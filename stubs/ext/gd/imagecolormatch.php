<?php 

#[\Until('8.5')]
function imagecolormatch(\GdImage $image1, \GdImage $image2): bool
{
}
#[\Since('8.5')]
function imagecolormatch(\GdImage $image1, \GdImage $image2): true
{
}