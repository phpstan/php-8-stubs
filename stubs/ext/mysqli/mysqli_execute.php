<?php 

/** @alias mysqli_stmt_execute */
#[\Until('8.1')]
function mysqli_execute(\mysqli_stmt $statement): bool
{
}
/** @alias mysqli_stmt_execute */
#[\Since('8.1')]
#[\Until('8.2')]
function mysqli_execute(\mysqli_stmt $statement, ?array $params = null): bool
{
}
/** @alias mysqli_stmt_execute */
#[\Since('8.2')]
#[\Until('8.3')]
function mysqli_execute(\mysqli_stmt $statement, ?array $params = null): bool
{
}
/** @alias mysqli_stmt_execute */
#[\Since('8.3')]
#[\Until('8.4')]
function mysqli_execute(\mysqli_stmt $statement, ?array $params = null): bool
{
}
/** @alias mysqli_stmt_execute */
#[\Since('8.4')]
#[\Until('8.5')]
function mysqli_execute(\mysqli_stmt $statement, ?array $params = null): bool
{
}
/** @alias mysqli_stmt_execute */
#[\Deprecated(since: '8.5', message: "use mysqli_stmt_execute() instead")]
#[\Since('8.5')]
function mysqli_execute(\mysqli_stmt $statement, ?array $params = null): bool
{
}