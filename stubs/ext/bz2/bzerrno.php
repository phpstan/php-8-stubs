<?php 

/** @param resource $bz */
#[\Until('8.1')]
function bzerrno($bz): int|false
{
}
/** @param resource $bz */
#[\Since('8.1')]
#[\Until('8.2')]
function bzerrno($bz): int
{
}
/** @param resource $bz */
#[\Since('8.2')]
#[\Until('8.3')]
function bzerrno($bz): int
{
}
/** @param resource $bz */
#[\Since('8.3')]
#[\Until('8.4')]
function bzerrno($bz): int
{
}
/** @param resource $bz */
#[\Since('8.4')]
#[\Until('8.5')]
function bzerrno($bz): int
{
}
/** @param resource $bz */
#[\Since('8.5')]
function bzerrno($bz): int
{
}