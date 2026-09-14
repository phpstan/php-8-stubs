<?php 

namespace Snmp;

#[\Since('8.6')]
enum OidOutput
{
    case Suffix;
    case Module;
    case Full;
    case Numeric;
    case Ucd;
    case None;
}