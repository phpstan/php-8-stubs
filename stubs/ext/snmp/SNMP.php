<?php 

class SNMP
{
    public function __construct(int $version, string $hostname, string $community, int $timeout = -1, int $retries = -1)
    {
    }
    /** @tentative-return-type */
    public function close()
    {
    }
    /** @tentative-return-type */
    public function setSecurity(string $securityLevel, string $authProtocol = "", string $authPassphrase = "", string $privacyProtocol = "", string $privacyPassphrase = "", string $contextName = "", string $contextEngineId = "")
    {
    }
    /** @tentative-return-type */
    public function get(array|string $objectId, bool $preserveKeys = false)
    {
    }
    /** @tentative-return-type */
    public function getnext(array|string $objectId)
    {
    }
    /** @tentative-return-type */
    public function walk(array|string $objectId, bool $suffixAsKey = false, int $maxRepetitions = -1, int $nonRepeaters = -1)
    {
    }
    /** @tentative-return-type */
    public function set(array|string $objectId, array|string $type, array|string $value)
    {
    }
    /** @tentative-return-type */
    public function getErrno()
    {
    }
    /** @tentative-return-type */
    public function getError()
    {
    }
}