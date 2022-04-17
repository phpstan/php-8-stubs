<?php 

#endif
#if HAVE_SOCKETPAIR
/**
 * @return array<int, resource>|false
 * @refcount 1
 */
function stream_socket_pair(int $domain, int $type, int $protocol) : array|false
{
}