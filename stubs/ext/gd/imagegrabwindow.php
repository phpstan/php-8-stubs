<?php 

#ifdef PHP_WIN32
function imagegrabwindow(int $handle, int $client_area = 0) : \GdImage|false
{
}