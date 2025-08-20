<?php 

#[\Until('8.4')]
function socket_create_listen(int $port, int $backlog = 128): \Socket|false
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function socket_create_listen(int $port, int $backlog = SOMAXCONN): \Socket|false
{
}
#[\Since('8.5')]
function socket_create_listen(int $port, int $backlog = SOMAXCONN): \Socket|false
{
}