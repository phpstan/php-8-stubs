<?php 

namespace Uri;

#[\Since('8.5')]
enum UriComparisonMode
{
    case IncludeFragment;
    case ExcludeFragment;
}