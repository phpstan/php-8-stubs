<?php 

/** @param resource $stream */
#[\Until('8.1')]
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): int|false
{
}
/** @param resource $stream */
#[\Since('8.1')]
#[\Until('8.2')]
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false
{
}
/** @param resource $stream */
#[\Since('8.2')]
#[\Until('8.3')]
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false
{
}
/** @param resource $stream */
#[\Since('8.3')]
#[\Until('8.4')]
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false
{
}
/** @param resource $stream */
#[\Since('8.4')]
#[\Until('8.5')]
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false
{
}
/** @param resource $stream */
#[\Since('8.5')]
function fputcsv($stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): int|false
{
}