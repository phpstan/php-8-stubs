<?php 

#[\Until('8.3')]
function deflate_init(int $encoding, array $options = []): \DeflateContext|false
{
}
#[\Since('8.3')]
function deflate_init(int $encoding, array|object $options = []): \DeflateContext|false
{
}