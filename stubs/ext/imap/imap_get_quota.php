<?php 

#if defined(HAVE_IMAP2000) || defined(HAVE_IMAP2001)
/** @param resource $stream_id */
function imap_get_quota($stream_id, string $qroot) : array|false
{
}