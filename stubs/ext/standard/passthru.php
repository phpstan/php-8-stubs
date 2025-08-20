<?php 

/** @param int $result_code */
#[\Until('8.2')]
function passthru(string $command, &$result_code = null): ?bool
{
}
/** @param int $result_code */
#[\Since('8.2')]
#[\Until('8.3')]
function passthru(string $command, &$result_code = null): false|null
{
}
/** @param int $result_code */
#[\Since('8.3')]
#[\Until('8.4')]
function passthru(string $command, &$result_code = null): false|null
{
}
/** @param int $result_code */
#[\Since('8.4')]
#[\Until('8.5')]
function passthru(string $command, &$result_code = null): false|null
{
}
/** @param int $result_code */
#[\Since('8.5')]
function passthru(string $command, &$result_code = null): false|null
{
}