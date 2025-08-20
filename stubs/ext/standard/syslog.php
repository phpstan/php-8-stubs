<?php 

#[\Until('8.2')]
function syslog(int $priority, string $message): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function syslog(int $priority, string $message): true
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function syslog(int $priority, string $message): true
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function syslog(int $priority, string $message): true
{
}
#[\Since('8.5')]
function syslog(int $priority, string $message): true
{
}