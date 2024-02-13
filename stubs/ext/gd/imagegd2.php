<?php 

#[\Until('8.2')]
function imagegd2(\GdImage $image, ?string $file = null, int $chunk_size = UNKNOWN, int $mode = UNKNOWN): bool
{
}
#[\Since('8.2')]
function imagegd2(\GdImage $image, ?string $file = null, int $chunk_size = 128, int $mode = IMG_GD2_RAW): bool
{
}