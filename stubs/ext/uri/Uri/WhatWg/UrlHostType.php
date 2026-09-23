<?php 

namespace Uri\WhatWg;

#[\Since('8.6')]
enum UrlHostType
{
    case IpV4;
    case IpV6;
    case Domain;
    case Opaque;
    case Empty;
}