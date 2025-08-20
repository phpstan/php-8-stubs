<?php 

#[\Until('8.3')]
function snmp_set_quick_print(bool $enable): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function snmp_set_quick_print(bool $enable): true
{
}
#[\Since('8.4')]
#[\Until('8.5')]
function snmp_set_quick_print(bool $enable): true
{
}
#[\Since('8.5')]
function snmp_set_quick_print(bool $enable): true
{
}