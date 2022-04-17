<?php 

#ifdef PHP_WIN32
/** @refcount 1 */
function imagegrabwindow(int $handle, bool $client_area = false) : \GdImage|false
{
}