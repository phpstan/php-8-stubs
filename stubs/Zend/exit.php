<?php 

#[\Since('8.4')]
#[\Until('8.5')]
function exit(string|int $status = 0): never
{
}
#[\Since('8.5')]
function exit(string|int $status = 0): never
{
}