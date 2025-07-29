<?php 

#[\Until('8.5')]
function gzfile(string $filename, int $use_include_path = 0): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Since('8.5')]
function gzfile(string $filename, bool $use_include_path = false): array|false
{
}