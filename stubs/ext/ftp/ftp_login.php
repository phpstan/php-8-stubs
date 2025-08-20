<?php 

#endif
/** @param resource $ftp */
#[\Until('8.1')]
function ftp_login($ftp, string $username, string $password): bool
{
}
#endif
#[\Since('8.1')]
#[\Until('8.2')]
function ftp_login(\FTP\Connection $ftp, string $username, string $password): bool
{
}
#endif
#[\Since('8.2')]
#[\Until('8.3')]
function ftp_login(\FTP\Connection $ftp, string $username, #[\SensitiveParameter] string $password): bool
{
}
#endif
#[\Since('8.3')]
#[\Until('8.4')]
function ftp_login(\FTP\Connection $ftp, string $username, #[\SensitiveParameter] string $password): bool
{
}
#endif
#[\Since('8.4')]
#[\Until('8.5')]
function ftp_login(\FTP\Connection $ftp, string $username, #[\SensitiveParameter] string $password): bool
{
}
#endif
#[\Since('8.5')]
function ftp_login(\FTP\Connection $ftp, string $username, #[\SensitiveParameter] string $password): bool
{
}