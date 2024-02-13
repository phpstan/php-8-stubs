<?php 

/** @param resource $context */
#[\Since('8.2')]
#[\Until('8.3')]
function stream_context_set_options($context, array $options): true
{
}
/** @param resource $context */
#[\Since('8.3')]
function stream_context_set_options($context, array $options): bool
{
}