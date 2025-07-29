<?php 

#[\Until('8.5')]
function readgzfile(string $filename, int $use_include_path = 0): int|false
{
}
#[\Since('8.5')]
function readgzfile(string $filename, bool $use_include_path = false): int|false
{
}