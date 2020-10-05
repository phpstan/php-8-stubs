<?php 

#ifdef HAVE_GD_PNG
/** @param resource|string|null $to */
function imagepng(\GdImage $im, $to = null, int $quality = -1, int $filters = -1) : bool
{
}