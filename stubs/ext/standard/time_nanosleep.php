<?php 

#if HAVE_NANOSLEEP
/**
 * @return array<string, int>|bool
 * @refcount 1
 */
function time_nanosleep(int $seconds, int $nanoseconds) : array|bool
{
}