<?php 

#endif
#[\Since('8.4')]
#[\Until('8.5')]
function pg_change_password(\PgSql\Connection $connection, string $user, #[\SensitiveParameter] string $password): bool
{
}
#endif
#[\Since('8.5')]
function pg_change_password(\PgSql\Connection $connection, string $user, #[\SensitiveParameter] string $password): bool
{
}