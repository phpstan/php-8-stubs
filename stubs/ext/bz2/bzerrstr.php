<?php 

/** @param resource $bz */
#[\Until('8.1')]
function bzerrstr($bz): string|false
{
}
/** @param resource $bz */
#[\Since('8.1')]
#[\Until('8.2')]
function bzerrstr($bz): string
{
}
/** @param resource $bz */
#[\Since('8.2')]
#[\Until('8.3')]
function bzerrstr($bz): string
{
}
/** @param resource $bz */
#[\Since('8.3')]
#[\Until('8.4')]
function bzerrstr($bz): string
{
}
/** @param resource $bz */
#[\Since('8.4')]
#[\Until('8.5')]
function bzerrstr($bz): string
{
}
/** @param resource $bz */
#[\Since('8.5')]
function bzerrstr($bz): string
{
}