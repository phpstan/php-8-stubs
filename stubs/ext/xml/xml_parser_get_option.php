<?php 

#[\Until('8.2')]
function xml_parser_get_option(\XMLParser $parser, int $option): string|int
{
}
/** @refcount 1 */
#[\Since('8.2')]
function xml_parser_get_option(\XMLParser $parser, int $option): string|int|bool
{
}