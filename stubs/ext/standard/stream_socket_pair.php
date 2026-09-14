<?php 

#endif
#if HAVE_SOCKETPAIR
#[\Until('8.6')]
function stream_socket_pair(int $domain, int $type, int $protocol): array|false
{
}
#endif
#ifdef HAVE_SOCKETPAIR
/**
 * @param resource|null $context
 * @return array<int, resource>|false
 * @refcount 1
 */
#[\Since('8.6')]
function stream_socket_pair(int $domain, int $type, int $protocol, $context = null): array|false
{
}