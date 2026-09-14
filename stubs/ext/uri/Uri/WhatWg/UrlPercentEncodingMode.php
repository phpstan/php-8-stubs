<?php 

namespace Uri\WhatWg;

#[\Since('8.6')]
enum UrlPercentEncodingMode
{
    case Username;
    case Password;
    case OpaqueHost;
    case Path;
    case OpaquePath;
    case PathSegment;
    case Query;
    case SpecialQuery;
    case FormQuery;
    case Fragment;
}