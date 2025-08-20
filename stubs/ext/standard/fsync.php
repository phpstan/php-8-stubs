<?php 

/** @param resource $stream */
#[\Since('8.1')]
#[\Until('8.2')]
function fsync($stream): bool
{
}
/** @param resource $stream */
#[\Since('8.2')]
#[\Until('8.3')]
function fsync($stream): bool
{
}
/** @param resource $stream */
#[\Since('8.3')]
#[\Until('8.4')]
function fsync($stream): bool
{
}
/** @param resource $stream */
#[\Since('8.4')]
#[\Until('8.5')]
function fsync($stream): bool
{
}
/** @param resource $stream */
#[\Since('8.5')]
function fsync($stream): bool
{
}