<?php 

#[\Until('8.6')]
function socket_addrinfo_lookup(string $host, ?string $service = null, array $hints = []): array|false
{
}
/**
 * @return array<int, AddressInfo>|false
 * @param int $error_code
 * @refcount 1
 */
#[\Since('8.6')]
function socket_addrinfo_lookup(string $host, ?string $service = null, array $hints = [], &$error_code = null): array|false
{
}