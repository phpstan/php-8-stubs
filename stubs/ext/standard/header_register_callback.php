<?php 

/* main/SAPI.c */
#[\Until('8.6')]
function header_register_callback(callable $callback): bool
{
}
/* main/SAPI.c */
#[\Since('8.6')]
function header_register_callback(callable $callback): true
{
}