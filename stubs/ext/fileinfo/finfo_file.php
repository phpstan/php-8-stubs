<?php 

/**
 * @param resource $finfo
 * @param resource|null $context
 */
#[\Until('8.1')]
function finfo_file($finfo, string $filename, int $flags = FILEINFO_NONE, $context = null): string|false
{
}
// TODO make return type void
/**
 * @param resource|null $context
 * @refcount 1
 */
#[\Since('8.1')]
#[\Until('8.2')]
function finfo_file(\finfo $finfo, string $filename, int $flags = FILEINFO_NONE, $context = null): string|false
{
}
// TODO make return type void
/**
 * @param resource|null $context
 * @refcount 1
 */
#[\Since('8.2')]
#[\Until('8.3')]
function finfo_file(\finfo $finfo, string $filename, int $flags = FILEINFO_NONE, $context = null): string|false
{
}
// TODO make return type void
/**
 * @param resource|null $context
 * @refcount 1
 */
#[\Since('8.3')]
#[\Until('8.4')]
function finfo_file(\finfo $finfo, string $filename, int $flags = FILEINFO_NONE, $context = null): string|false
{
}
/**
 * @param resource|null $context
 * @refcount 1
 */
#[\Since('8.4')]
#[\Until('8.5')]
function finfo_file(\finfo $finfo, string $filename, int $flags = FILEINFO_NONE, $context = null): string|false
{
}
/**
 * @param resource|null $context
 * @refcount 1
 */
#[\Since('8.5')]
function finfo_file(\finfo $finfo, string $filename, int $flags = FILEINFO_NONE, $context = null): string|false
{
}