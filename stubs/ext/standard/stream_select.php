<?php 

/* streamsfuncs.c */
#[\Until('8.1')]
function stream_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0): int|false
{
}
/* streamsfuncs.c */
#[\Since('8.1')]
#[\Until('8.6')]
function stream_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, ?int $microseconds = null): int|false
{
}
/* streamsfuncs.c */
/**
 * @param resource|null $context
 */
#[\Since('8.6')]
function stream_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, ?int $microseconds = null, $context = null): int|false
{
}