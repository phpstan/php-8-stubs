<?php 

/** @param string|int $value */
#[\Until('8.2')]
function xml_parser_set_option(\XMLParser $parser, int $option, $value): bool
{
}
/** @param string|int|bool $value */
#[\Since('8.2')]
function xml_parser_set_option(\XMLParser $parser, int $option, $value): bool
{
}