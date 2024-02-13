<?php 

#[\Until('8.2')]
function intlcal_clear(\IntlCalendar $calendar, ?int $field = null): bool
{
}
#[\Since('8.2')]
function intlcal_clear(\IntlCalendar $calendar, ?int $field = null): true
{
}