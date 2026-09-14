<?php 

/** @param array $matches */
#[\Until('8.6')]
function mb_ereg(string $pattern, string $string, &$matches = null): bool
{
}
/** @param array $matches */
#[\Deprecated(since: '8.6', message: "because the underlying library is no longer maintained")]
#[\Since('8.6')]
function mb_ereg(string $pattern, string $string, &$matches = null): bool
{
}