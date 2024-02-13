<?php 

/** @param resource $context */
#[\Until('8.2')]
function stream_context_set_option($context, array|string $wrapper_or_options, ?string $option_name = null, mixed $value = UNKNOWN): bool
{
}
/** @param resource $context */
#[\Since('8.2')]
#[\Until('8.3')]
function stream_context_set_option($context, array|string $wrapper_or_options, ?string $option_name = null, mixed $value = UNKNOWN): true
{
}
/** @param resource $context */
#[\Since('8.3')]
function stream_context_set_option($context, array|string $wrapper_or_options, ?string $option_name = null, mixed $value = UNKNOWN): bool
{
}