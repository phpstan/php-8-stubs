<?php 

#if !defined(HAVE_DBMAKER) && !defined(HAVE_SOLID) && !defined(HAVE_SOLID_30) &&!defined(HAVE_SOLID_35)
/**
 * @param resource $connection_id
 * @return resource|false
 */
function odbc_tableprivileges($connection_id, ?string $catalog, string $schema, string $name)
{
}