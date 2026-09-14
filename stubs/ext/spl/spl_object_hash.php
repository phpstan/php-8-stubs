<?php 

#[\Until('8.6')]
function spl_object_hash(object $object): string
{
}
/** @refcount 1 */
#[\Deprecated(message: "consider using spl_object_id() instead", since: "8.6")]
#[\Since('8.6')]
function spl_object_hash(object $object): string
{
}