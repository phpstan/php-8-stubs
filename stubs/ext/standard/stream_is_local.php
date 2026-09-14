<?php 

/** @param resource|string $stream */
#[\Until('8.6')]
function stream_is_local($stream): bool
{
}
/**
 * @param resource|string $stream
 * @param resource|null $context
 */
#[\Since('8.6')]
function stream_is_local($stream, $context = null): bool
{
}