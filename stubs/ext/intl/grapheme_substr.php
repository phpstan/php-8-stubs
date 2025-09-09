<?php 

#[\Until('8.5')]
function grapheme_substr(string $string, int $offset, ?int $length = null): string|false
{
}
#[\Since('8.5')]
function grapheme_substr(string $string, int $offset, ?int $length = null, string $locale = ""): string|false
{
}