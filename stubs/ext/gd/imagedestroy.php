<?php 

#endif
#[\Until('8.5')]
function imagedestroy(\GdImage $image): bool
{
}
#[\Since('8.5')]
function imagedestroy(\GdImage $image): true
{
}