<?php 

/** @param resource $statement */
#[\Since('8.2')]
#[\Until('8.3')]
function oci_set_prefetch_lob($statement, int $prefetch_lob_size): bool
{
}
/** @param resource $statement */
#[\Since('8.3')]
function oci_set_prefetch_lob($statement, int $prefetch_lob_size): bool
{
}