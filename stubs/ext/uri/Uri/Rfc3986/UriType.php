<?php 

namespace Uri\Rfc3986;

#[\Since('8.6')]
enum UriType
{
    case AbsolutePathReference;
    case RelativePathReference;
    case NetworkPathReference;
    case Uri;
}