<?php 

namespace Uri\Rfc3986;

#[\Since('8.6')]
enum UriHostType
{
    case IPv4;
    case IPv6;
    case IPvFuture;
    case RegisteredName;
}