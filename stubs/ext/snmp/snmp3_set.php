<?php 

function snmp3_set(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, array|string $object_id, array|string $type, array|string $value, int $timeout = -1, int $retries = -1) : array|bool
{
}