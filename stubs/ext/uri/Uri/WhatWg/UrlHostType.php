<?php 

namespace Uri\WhatWg;

#[\Since('8.6')]
enum UrlHostType
{
    case IPv4;
    case IPv6;
    case Domain;
    case Opaque;
    case Empty;
}