<?php 

/** @alias rtrim */
#[\Until('8.6')]
function chop(string $string, string $characters = " \n\r\t\v\x00"): string
{
}
/** @alias rtrim */
#[\Since('8.6')]
function chop(string $string, string $characters = " \f\n\r\t\v\x00"): string
{
}