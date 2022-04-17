<?php 

/**
 * @param resource $stream
 * @return array<int, mixed>|int|false|null
 * @refcount 1
 */
function fscanf($stream, string $format, mixed &...$vars) : array|int|false|null
{
}