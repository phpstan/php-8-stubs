<?php 

/** @param resource $stream */
#[\Until('8.4')]
function stream_bucket_new($stream, string $buffer): object
{
}
/**
 * @param resource $stream
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function stream_bucket_new($stream, string $buffer): \StreamBucket
{
}
/**
 * @param resource $stream
 * @refcount 1
 */
#[\Since('8.5')]
function stream_bucket_new($stream, string $buffer): \StreamBucket
{
}