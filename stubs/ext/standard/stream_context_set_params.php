<?php 

/** @param resource $context */
#[\Until('8.2')]
function stream_context_set_params($context, array $params): bool
{
}
/** @param resource $context */
#[\Since('8.2')]
#[\Until('8.3')]
function stream_context_set_params($context, array $params): true
{
}
/** @param resource $context */
#[\Since('8.3')]
function stream_context_set_params($context, array $params): bool
{
}