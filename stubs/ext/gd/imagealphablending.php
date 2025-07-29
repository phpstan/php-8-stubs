<?php 

#[\Until('8.5')]
function imagealphablending(\GdImage $image, bool $enable): bool
{
}
#[\Since('8.5')]
function imagealphablending(\GdImage $image, bool $enable): true
{
}