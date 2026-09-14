<?php 

namespace Snmp;

#[\Since('8.6')]
enum StringOutput
{
    case Guess;
    case Ascii;
    case Hex;
}