<?php 

#[\Until('8.5')]
function grapheme_strstr(string $haystack, string $needle, bool $beforeNeedle = false): string|false
{
}
#[\Since('8.5')]
function grapheme_strstr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): string|false
{
}