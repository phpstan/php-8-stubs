<?php 

class SNMP
{
    public function __construct(int $version, string $hostname, string $community, int $timeout = -1, int $retries = -1)
    {
    }
    /** @return bool */
    public function close()
    {
    }
    /** @return bool */
    public function setSecurity(string $securityLevel, string $authProtocol = "", string $authPassphrase = "", string $privacyProtocol = "", string $privacyPassphrase = "", string $contextName = "", string $contextEngineId = "")
    {
    }
    /** @return mixed */
    public function get(array|string $objectId, bool $preserveKeys = false)
    {
    }
    /** @return mixed */
    public function getnext(array|string $objectId)
    {
    }
    /** @return array|false */
    public function walk(array|string $objectId, bool $suffixAsKey = false, int $maxRepetitions = -1, int $nonRepeaters = -1)
    {
    }
    /** @return bool */
    public function set(array|string $objectId, array|string $type, array|string $value)
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