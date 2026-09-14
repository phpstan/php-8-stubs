<?php 

#endif
#[\Until('8.6')]
function mysqli_get_charset(\mysqli $mysql): ?object
{
}
/** @refcount 1 */
#[\Deprecated(since: '8.6', message: 'did you mean mysqli_character_set_name()?')]
#[\Since('8.6')]
function mysqli_get_charset(\mysqli $mysql): ?object
{
}