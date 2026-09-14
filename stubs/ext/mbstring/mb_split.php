<?php 

#[\Until('8.6')]
function mb_split(string $pattern, string $string, int $limit = -1): array|false
{
}
/**
 * @return array<int, string>|false
 * @refcount 1
 */
#[\Deprecated(since: '8.6', message: "because the underlying library is no longer maintained")]
#[\Since('8.6')]
function mb_split(string $pattern, string $string, int $limit = -1): array|false
{
}