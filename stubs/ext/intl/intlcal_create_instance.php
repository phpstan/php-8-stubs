<?php 

/* calendar */
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Until('8.5')]
function intlcal_create_instance($timezone = null, ?string $locale = null): ?\IntlCalendar
{
}
/* calendar */
#[\Since('8.5')]
function intlcal_create_instance(\IntlTimeZone|\DateTimeZone|string|null $timezone = null, ?string $locale = null): ?\IntlCalendar
{
}