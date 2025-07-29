<?php 

/** @return resource|false */
#[\Until('8.5')]
function gzopen(string $filename, string $mode, int $use_include_path = 0)
{
}
/**
 * @return resource|false
 * @refcount 1
 */
#[\Since('8.5')]
function gzopen(string $filename, string $mode, bool $use_include_path = false)
{
}