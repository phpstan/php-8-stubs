<?php 

#[\Until('8.6')]
function ltrim(string $string, string $characters = " \n\r\t\v\x00"): string
{
}
/**
 * @compile-time-eval
 * @frameless-function {"arity": 1}
 * @frameless-function {"arity": 2}
 */
#[\Since('8.6')]
function ltrim(string $string, string $characters = " \f\n\r\t\v\x00"): string
{
}