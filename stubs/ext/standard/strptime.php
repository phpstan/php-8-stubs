<?php 

/* datetime.c */
#if HAVE_STRPTIME
/**
 * @return array<string, int|string>|false
 * @deprecated
 * @refcount 1
 */
function strptime(string $timestamp, string $format) : array|false
{
}