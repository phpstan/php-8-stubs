<?php 

/** @param callable $handler */
#[\Until('8.2')]
function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, $handler): bool
{
}
#[\Since('8.2')]
#[\Until('8.3')]
function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, callable|string|null $handler): true
{
}
/** @param callable $handler */
#[\Since('8.3')]
function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, $handler): true
{
}