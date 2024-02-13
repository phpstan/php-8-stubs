<?php 

#[\Until('8.2')]
function intlcal_set(\IntlCalendar $calendar, int $year, int $month, int $dayOfMonth = UNKNOWN, int $hour = UNKNOWN, int $minute = UNKNOWN, int $second = UNKNOWN): bool
{
}
/** @deprecated */
#[\Since('8.2')]
function intlcal_set(\IntlCalendar $calendar, int $year, int $month, int $dayOfMonth = UNKNOWN, int $hour = UNKNOWN, int $minute = UNKNOWN, int $second = UNKNOWN): true
{
}