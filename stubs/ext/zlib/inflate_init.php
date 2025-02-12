<?php 

#[\Until('8.3')]
function inflate_init(int $encoding, array $options = []): \InflateContext|false
{
}
#[\Since('8.3')]
function inflate_init(int $encoding, array|object $options = []): \InflateContext|false
{
}