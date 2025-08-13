<?php 

#endif
#[\Until('8.5')]
function imagedestroy(\GdImage $image): bool
{
}
#[\Deprecated(since: '8.5', message: "as it has no effect since PHP 8.0")]
#[\Since('8.5')]
function imagedestroy(\GdImage $image): true
{
}