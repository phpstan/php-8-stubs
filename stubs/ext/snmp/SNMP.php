<?php 

class SNMP
{
    public function __construct(int $version, string $hostname, string $community, int $timeout = -1, int $retries = -1)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function close()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function close() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setSecurity(string $securityLevel, string $authProtocol = "", string $authPassphrase = "", string $privacyProtocol = "", string $privacyPassphrase = "", string $contextName = "", string $contextEngineId = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setSecurity(string $securityLevel, string $authProtocol = "", string $authPassphrase = "", string $privacyProtocol = "", string $privacyPassphrase = "", string $contextName = "", string $contextEngineId = "") : bool
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function get(array|string $objectId, bool $preserveKeys = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function get(array|string $objectId, bool $preserveKeys = false) : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getnext(array|string $objectId)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getnext(array|string $objectId) : mixed
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function walk(array|string $objectId, bool $suffixAsKey = false, int $maxRepetitions = -1, int $nonRepeaters = -1)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function walk(array|string $objectId, bool $suffixAsKey = false, int $maxRepetitions = -1, int $nonRepeaters = -1) : array|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function set(array|string $objectId, array|string $type, array|string $value)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function set(array|string $objectId, array|string $type, array|string $value) : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getErrno()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getErrno() : int
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getError()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getError() : string
    {
    }
}