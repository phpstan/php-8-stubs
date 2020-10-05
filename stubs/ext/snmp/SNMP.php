<?php 

class SNMP
{
    public function __construct(int $version, string $host, string $community, int $timeout = -1, int $retries = -1)
    {
    }
    /** @return bool */
    public function close()
    {
    }
    /** @return bool */
    public function setSecurity(string $sec_level, string $auth_protocol = "", string $auth_passphrase = "", string $priv_protocol = "", string $priv_passphrase = "", string $contextName = "", string $contextEngineID = "")
    {
    }
    /** @return array|bool */
    public function get(array|string $object_id, bool $use_orignames = false)
    {
    }
    /** @return array|bool */
    public function getnext(array|string $object_id)
    {
    }
    /** @return array|bool */
    public function walk(array|string $object_id, bool $suffix_keys = false, int $max_repetitions = -1, int $non_repeaters = -1)
    {
    }
    /** @return array|bool */
    public function set(array|string $object_id, array|string $type, array|string $value)
    {
    }
    /** @return int */
    public function getErrno()
    {
    }
    /** @return string */
    public function getError()
    {
    }
}