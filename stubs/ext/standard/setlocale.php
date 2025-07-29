<?php 

/**
 * @param array|string $locales
 * @param string $rest
 */
#[\Until('8.5')]
function setlocale(int $category, $locales, ...$rest): string|false
{
}
/**
 * @param array|string|null $locales
 * @param string|null $rest
 */
#[\Since('8.5')]
function setlocale(int $category, $locales, ...$rest): string|false
{
}