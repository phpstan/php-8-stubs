<?php 

#endif
/**
 * @param resource $from
 * @param resource $to
 */
#[\Until('8.6')]
function stream_copy_to_stream($from, $to, ?int $length = null, int $offset = 0): int|false
{
}
#endif
/**
 * @param resource $from
 * @param resource $to
 * @param resource|null $context
 */
#[\Since('8.6')]
function stream_copy_to_stream($from, $to, ?int $length = null, int $offset = 0, $context = null): int|false
{
}