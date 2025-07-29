<?php 

#[\Until('8.5')]
function imagesavealpha(\GdImage $image, bool $enable): bool
{
}
#[\Since('8.5')]
function imagesavealpha(\GdImage $image, bool $enable): true
{
}