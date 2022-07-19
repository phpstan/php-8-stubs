<?php 

#[\Until('8.2')]
function iterator_to_array(\Traversable $iterator, bool $preserve_keys = true) : array
{
}
/** @refcount 1 */
#[\Since('8.2')]
function iterator_to_array(iterable $iterator, bool $preserve_keys = true) : array
{
}