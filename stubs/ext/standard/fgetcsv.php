<?php 

/**
 * @param resource $stream
 * @return array<int, string|null>|false
 * @refcount 1
 */
function fgetcsv($stream, ?int $length = null, string $separator = ",", string $enclosure = "\"", string $escape = "\\") : array|false
{
}