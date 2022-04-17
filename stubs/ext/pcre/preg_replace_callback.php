<?php 

/**
 * @param int $count
 * @return string|array<int|string, string>|null
 */
function preg_replace_callback(string|array $pattern, callable $callback, string|array $subject, int $limit = -1, &$count = null, int $flags = 0) : string|array|null
{
}