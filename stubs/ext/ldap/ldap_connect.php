<?php 

/** @return resource|false */
#[\Until('8.1')]
function ldap_connect(?string $uri = null, int $port = 389)
{
}
#[\Since('8.1')]
function ldap_connect(?string $uri = null, int $port = 389): \LDAP\Connection|false
{
}