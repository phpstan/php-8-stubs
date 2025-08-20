<?php 

/* dateformat */
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Until('8.1')]
function datefmt_create(?string $locale, int $dateType, int $timeType, $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter
{
}
/* dateformat */
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Since('8.1')]
#[\Until('8.2')]
function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter
{
}
/* dateformat */
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Since('8.2')]
#[\Until('8.3')]
function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter
{
}
/* dateformat */
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Since('8.3')]
#[\Until('8.4')]
function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter
{
}
/* dateformat */
/** @param IntlTimeZone|DateTimeZone|string|null $timezone */
#[\Since('8.4')]
#[\Until('8.5')]
function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter
{
}
/* dateformat */
#[\Since('8.5')]
function datefmt_create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, \IntlTimeZone|\DateTimeZone|string|null $timezone = null, \IntlCalendar|int|null $calendar = null, ?string $pattern = null): ?\IntlDateFormatter
{
}