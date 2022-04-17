<?php 

class IntlGregorianCalendar extends \IntlCalendar
{
    /**
     * @param DateTimeZone|IntlTimeZone|string|int|null $timezoneOrYear
     * @param string|int|null $localeOrMonth
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     */
    public function __construct($timezoneOrYear = UNKNOWN, $localeOrMonth = UNKNOWN, $day = UNKNOWN, $hour = UNKNOWN, $minute = UNKNOWN, $second = UNKNOWN)
    {
    }
    /**
     * @return bool
     * @alias intlgregcal_set_gregorian_change
     */
    #[\Until('8.1')]
    public function setGregorianChange(float $timestamp)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlgregcal_set_gregorian_change
     */
    #[\Since('8.1')]
    public function setGregorianChange(float $timestamp) : bool
    {
    }
    /**
     * @return float
     * @alias intlgregcal_get_gregorian_change
     */
    #[\Until('8.1')]
    public function getGregorianChange()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlgregcal_get_gregorian_change
     */
    #[\Since('8.1')]
    public function getGregorianChange() : float
    {
    }
    /**
     * @return bool
     * @alias intlgregcal_is_leap_year
     */
    #[\Until('8.1')]
    public function isLeapYear(int $year)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlgregcal_is_leap_year
     */
    #[\Since('8.1')]
    public function isLeapYear(int $year) : bool
    {
    }
}