<?php 

/** @param resource $context */
#[\Until('8.4')]
function stream_context_set_params($context, array $params): bool
{
}
/** @param resource $context */
#[\Since('8.4')]
#[\Until('8.5')]
function stream_context_set_params($context, array $params): true
{
}
/** @param resource $context */
#[\Since('8.5')]
function stream_context_set_params($context, array $params): true
{
}