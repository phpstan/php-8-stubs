<?php 

/* proc_open.c */
#ifdef PHP_CAN_SUPPORT_PROC_OPEN
/**
 * @param array $pipes
 * @return resource|false
 * @refcount 1
 */
function proc_open(array|string $command, array $descriptor_spec, &$pipes, ?string $cwd = null, ?array $env_vars = null, ?array $options = null)
{
}