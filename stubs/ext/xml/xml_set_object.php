<?php 

#[\Until('8.2')]
function xml_set_object(\XMLParser $parser, object $object): bool
{
}
#[\Since('8.2')]
#[\Until('8.4')]
function xml_set_object(\XMLParser $parser, object $object): true
{
}
#[\Deprecated(since: '8.4', message: 'provide a proper method callable to xml_set_*_handler() functions')]
#[\Since('8.4')]
function xml_set_object(\XMLParser $parser, object $object): true
{
}