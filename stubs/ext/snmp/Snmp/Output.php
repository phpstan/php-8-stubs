<?php 

namespace Snmp;

#[\Since('8.6')]
enum Output
{
    case NumericIndex;
    case EnumPrint;
    case EscapeQuotes;
    case QuickPrint;
    case NumericTimeticks;
    case HexText;
    case DontPrintUnits;
    case ExtendedIndex;
}