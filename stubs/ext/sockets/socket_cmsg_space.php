<?php 

#[\Until('8.6')]
function socket_cmsg_space(int $level, int $type, int $num = 0): ?int
{
}
#[\Since('8.6')]
function socket_cmsg_space(int $level, int $type, int $num = 0): int
{
}