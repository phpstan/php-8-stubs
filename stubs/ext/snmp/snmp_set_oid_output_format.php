<?php 

#[\Until('8.3')]
function snmp_set_oid_output_format(int $format): bool
{
}
#[\Since('8.3')]
#[\Until('8.6')]
function snmp_set_oid_output_format(int $format): true
{
}
#[\Since('8.6')]
function snmp_set_oid_output_format(\Snmp\OidOutput|int $format): true
{
}