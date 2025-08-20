<?php 

/** @alias exit */
#[\Since('8.4')]
#[\Until('8.5')]
function die(string|int $status = 0): never
{
}
/** @alias exit */
#[\Since('8.5')]
function die(string|int $status = 0): never
{
}