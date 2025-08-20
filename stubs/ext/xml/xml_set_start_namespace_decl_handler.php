<?php 

/** @param callable $handler */
#[\Until('8.2')]
function xml_set_start_namespace_decl_handler(\XMLParser $parser, $handler): bool
{
}
/** @param callable $handler */
#[\Since('8.2')]
#[\Until('8.3')]
function xml_set_start_namespace_decl_handler(\XMLParser $parser, $handler): true
{
}
/** @param callable $handler */
#[\Since('8.3')]
#[\Until('8.4')]
function xml_set_start_namespace_decl_handler(\XMLParser $parser, $handler): true
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function xml_set_start_namespace_decl_handler(\XMLParser $parser, callable|string|null $handler): true
{
}
#[\Since('8.5')]
function xml_set_start_namespace_decl_handler(\XMLParser $parser, callable|string|null $handler): true
{
}