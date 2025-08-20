<?php 

/**
 * @param DateTimeZone|IntlTimeZone|string|int|null $timezoneOrYear
 * @param string|int|null $localeOrMonth
 * @param int $day
 * @param int $hour
 * @param int $minute
 * @param int $second
 */
#[\Until('8.4')]
function intlgregcal_create_instance($timezoneOrYear = UNKNOWN, $localeOrMonth = UNKNOWN, $day = UNKNOWN, $hour = UNKNOWN, $minute = UNKNOWN, $second = UNKNOWN): ?\IntlGregorianCalendar
{
}
/**
 * @param DateTimeZone|IntlTimeZone|string|int|null $timezoneOrYear
 * @param string|int|null $localeOrMonth
 * @param int $day
 * @param int $hour
 * @param int $minute
 * @param int $second
 */
#[\Deprecated(since: '8.4', message: 'use IntlGregorianCalendar::__construct(), IntlGregorianCalendar::createFromDate(), or IntlGregorianCalendar::createFromDateTime() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function intlgregcal_create_instance($timezoneOrYear = UNKNOWN, $localeOrMonth = UNKNOWN, $day = UNKNOWN, $hour = UNKNOWN, $minute = UNKNOWN, $second = UNKNOWN): ?\IntlGregorianCalendar
{
}
/**
 * @param DateTimeZone|IntlTimeZone|string|int|null $timezoneOrYear
 * @param string|int|null $localeOrMonth
 * @param int $day
 * @param int $hour
 * @param int $minute
 * @param int $second
 */
#[\Deprecated(since: '8.4', message: 'use IntlGregorianCalendar::__construct(), IntlGregorianCalendar::createFromDate(), or IntlGregorianCalendar::createFromDateTime() instead')]
#[\Since('8.5')]
function intlgregcal_create_instance($timezoneOrYear = UNKNOWN, $localeOrMonth = UNKNOWN, $day = UNKNOWN, $hour = UNKNOWN, $minute = UNKNOWN, $second = UNKNOWN): ?\IntlGregorianCalendar
{
}