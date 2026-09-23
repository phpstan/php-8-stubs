<?php 

namespace Uri\Rfc3986;

#[\Since('8.6')]
enum UriHostType
{
    case IpV4;
    case IpV6;
    case IpVFuture;
    case RegisteredName;
}