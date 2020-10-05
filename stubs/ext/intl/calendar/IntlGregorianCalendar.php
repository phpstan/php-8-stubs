<?php 

class IntlGregorianCalendar extends \IntlCalendar
{
    /**
     * @param DateTimeZone|IntlTimeZone|string|int|null $timeZoneOrYear
     * @param string|int|null $localeOrMonth
     * @param int $dayOfMonth
     * @param int $hour
     * @param int $minute
     * @param int $second
     */
    public function __construct($timeZoneOrYear = UNKNOWN, $localeOrMonth = UNKNOWN, $dayOfMonth = UNKNOWN, $hour = UNKNOWN, $minute = UNKNOWN, $second = UNKNOWN)
    {
    }
    /**
     * @return bool
     * @alias intlgregcal_set_gregorian_change
     */
    public function setGregorianChange(float $change)
    {
    }
    /**
     * @return float
     * @alias intlgregcal_get_gregorian_change
     */
    public function getGregorianChange()
    {
    }
    /**
     * @return bool
     * @alias intlgregcal_is_leap_year
     */
    public function isLeapYear(int $year)
    {
    }
}