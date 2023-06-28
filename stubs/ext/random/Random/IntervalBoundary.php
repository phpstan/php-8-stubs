<?php 

namespace Random;

#[\Since('8.3')]
enum IntervalBoundary
{
    case ClosedOpen;
    case ClosedClosed;
    case OpenClosed;
    case OpenOpen;
}