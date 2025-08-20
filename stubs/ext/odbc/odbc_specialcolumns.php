<?php 

#endif
/**
 * @param resource $odbc
 * @return resource|false
 */
#[\Until('8.4')]
function odbc_specialcolumns($odbc, int $type, ?string $catalog, string $schema, string $table, int $scope, int $nullable)
{
}
#endif
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_specialcolumns(\Odbc\Connection $odbc, int $type, ?string $catalog, string $schema, string $table, int $scope, int $nullable): \Odbc\Result|false
{
}
#endif
#[\Since('8.5')]
function odbc_specialcolumns(\Odbc\Connection $odbc, int $type, ?string $catalog, string $schema, string $table, int $scope, int $nullable): \Odbc\Result|false
{
}