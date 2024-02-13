<?php 

#[\Until('8.2')]
function snmp_set_quick_print(bool $enable): bool
{
}
#[\Since('8.2')]
function snmp_set_quick_print(bool $enable): true
{
}