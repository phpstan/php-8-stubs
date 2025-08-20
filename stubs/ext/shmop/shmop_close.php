<?php 

/** @deprecated */
#[\Until('8.4')]
function shmop_close(\Shmop $shmop): void
{
}
#[\Deprecated(since: '8.0', message: 'as Shmop objects are freed automatically')]
#[\Since('8.4')]
#[\Until('8.5')]
function shmop_close(\Shmop $shmop): void
{
}
#[\Deprecated(since: '8.0', message: 'as Shmop objects are freed automatically')]
#[\Since('8.5')]
function shmop_close(\Shmop $shmop): void
{
}