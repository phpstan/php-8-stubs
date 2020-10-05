<?php 

#ifdef HAVE_SOCKETPAIR
/** @param array $fd */
function socket_create_pair(int $domain, int $type, int $protocol, &$fd) : ?bool
{
}