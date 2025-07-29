<?php 

#[\Until('8.5')]
function imageantialias(\GdImage $image, bool $enable): bool
{
}
#[\Since('8.5')]
function imageantialias(\GdImage $image, bool $enable): true
{
}