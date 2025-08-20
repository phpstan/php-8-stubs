<?php 

/** @param resource $bz */
#[\Until('8.1')]
function bzerror($bz): array|false
{
}
/**
 * @param resource $bz
 * @return array<string, int|string>
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function bzerror($bz): array
{
}
/**
 * @param resource $bz
 * @return array<string, int|string>
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function bzerror($bz): array
{
}
/**
 * @param resource $bz
 * @return array<string, int|string>
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function bzerror($bz): array
{
}
/**
 * @param resource $bz
 * @return array<string, int|string>
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function bzerror($bz): array
{
}
/**
 * @param resource $bz
 * @return array<string, int|string>
 * @refcount 1
 */
#[\Since('8.5')]
function bzerror($bz): array
{
}