<?php 

/** @return resource|false */
#[\Until('8.1')]
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null)
{
}
/** @refcount 1 */
#[\Since('8.1')]
#[\Until('8.2')]
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): \finfo|false
{
}
/** @refcount 1 */
#[\Since('8.2')]
#[\Until('8.3')]
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): \finfo|false
{
}
/** @refcount 1 */
#[\Since('8.3')]
#[\Until('8.4')]
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): \finfo|false
{
}
/** @refcount 1 */
#[\Since('8.4')]
#[\Until('8.5')]
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): \finfo|false
{
}
/** @refcount 1 */
#[\Since('8.5')]
function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null): \finfo|false
{
}