<?php 

/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Until('8.5')]
function intlcal_set_time_zone(\IntlCalendar $calendar, $timezone): bool
{
}
#[\Since('8.5')]
function intlcal_set_time_zone(\IntlCalendar $calendar, \IntlTimeZone|\DateTimeZone|string|null $timezone): bool
{
}