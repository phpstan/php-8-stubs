<?php 

#[\Until('8.5')]
function libxml_set_external_entity_loader(?callable $resolver_function): bool
{
}
#[\Since('8.5')]
function libxml_set_external_entity_loader(?callable $resolver_function): true
{
}