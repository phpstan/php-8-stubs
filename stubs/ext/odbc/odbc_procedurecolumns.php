<?php 

#if !defined(HAVE_SOLID) && !defined(HAVE_SOLID_30) && !defined(HAVE_SOLID_35)
/**
 * @param resource $connection_id
 * @return resource|false
 */
function odbc_procedurecolumns($connection_id, ?string $catalog = null, ?string $schema = null, ?string $proc = null, ?string $column = null)
{
}