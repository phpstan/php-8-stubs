<?php 

/** @return resource|false */
#[\Until('8.2')]
function odbc_pconnect(string $dsn, string $user, string $password, int $cursor_option = SQL_CUR_USE_DRIVER)
{
}
/**
 * @return resource|false
 */
#[\Since('8.2')]
#[\Until('8.3')]
function odbc_pconnect(string $dsn, ?string $user = null, #[\SensitiveParameter] ?string $password = null, int $cursor_option = SQL_CUR_USE_DRIVER)
{
}
/**
 * @return resource|false
 */
#[\Since('8.3')]
function odbc_pconnect(string $dsn, string $user, #[\SensitiveParameter] string $password, int $cursor_option = SQL_CUR_USE_DRIVER)
{
}