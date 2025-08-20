<?php 

/**
 * @param resource $odbc
 * @return resource|false
 */
#[\Until('8.4')]
function odbc_procedures($odbc, ?string $catalog = null, ?string $schema = null, ?string $procedure = null)
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_procedures(\Odbc\Connection $odbc, ?string $catalog = null, ?string $schema = null, ?string $procedure = null): \Odbc\Result|false
{
}
#[\Since('8.5')]
function odbc_procedures(\Odbc\Connection $odbc, ?string $catalog = null, ?string $schema = null, ?string $procedure = null): \Odbc\Result|false
{
}