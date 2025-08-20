<?php 

#[\Until('8.3')]
function intlcal_set(\IntlCalendar $calendar, int $year, int $month, int $dayOfMonth = UNKNOWN, int $hour = UNKNOWN, int $minute = UNKNOWN, int $second = UNKNOWN): bool
{
}
#[\Since('8.3')]
#[\Until('8.4')]
function intlcal_set(\IntlCalendar $calendar, int $year, int $month, int $dayOfMonth = UNKNOWN, int $hour = UNKNOWN, int $minute = UNKNOWN, int $second = UNKNOWN): true
{
}
#[\Deprecated(since: '8.4', message: 'use IntlCalendar::set(), IntlCalendar::setDate(), or IntlCalendar::setDateTime() instead')]
#[\Since('8.4')]
function intlcal_set(\IntlCalendar $calendar, int $year, int $month, int $dayOfMonth = UNKNOWN, int $hour = UNKNOWN, int $minute = UNKNOWN, int $second = UNKNOWN): true
{
}