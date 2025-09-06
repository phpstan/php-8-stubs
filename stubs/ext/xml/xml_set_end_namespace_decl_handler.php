<?php 

/** @param callable|string|null $handler */
#[\Until('8.2')]
function xml_set_end_namespace_decl_handler(\XMLParser $parser, $handler): bool
{
}
/** @param callable|string|null $handler */
#[\Since('8.2')]
#[\Until('8.4')]
function xml_set_end_namespace_decl_handler(\XMLParser $parser, $handler): true
{
}
#[\Since('8.4')]
function xml_set_end_namespace_decl_handler(\XMLParser $parser, callable|string|null $handler): true
{
}