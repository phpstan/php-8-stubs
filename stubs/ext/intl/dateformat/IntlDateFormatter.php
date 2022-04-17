<?php 

/** @generate-class-entries */
class IntlDateFormatter
{
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @param IntlCalendar|int|null $calendar
     */
    #[\Until('8.1')]
    public function __construct(?string $locale, int $dateType, int $timeType, $timezone = null, $calendar = null, ?string $pattern = null)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @param IntlCalendar|int|null $calendar
     */
    #[\Since('8.1')]
    public function __construct(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, $calendar = null, ?string $pattern = null)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @return IntlDateFormatter|null
     * @alias datefmt_create
     */
    #[\Until('8.1')]
    public static function create(?string $locale, int $dateType, int $timeType, $timezone = null, IntlCalendar|int|null $calendar = null, ?string $pattern = null)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias datefmt_create
     */
    #[\Since('8.1')]
    public static function create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, IntlCalendar|int|null $calendar = null, ?string $pattern = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_datetype
     */
    public function getDateType()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_timetype
     */
    public function getTimeType()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_calendar
     */
    public function getCalendar()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_set_calendar
     */
    public function setCalendar(IntlCalendar|int|null $calendar)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_timezone_id
     */
    public function getTimeZoneId()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_calendar_object
     */
    public function getCalendarObject()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_timezone
     */
    public function getTimeZone()
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias datefmt_set_timezone
     */
    public function setTimeZone($timezone)
    {
    }
    // TODO return true on success
    /**
     * @tentative-return-type
     * @alias datefmt_set_pattern
     */
    public function setPattern(string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_pattern
     */
    public function getPattern()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_locale
     */
    public function getLocale(int $type = ULOC_ACTUAL_LOCALE)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_set_lenient
     */
    public function setLenient(bool $lenient)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_is_lenient
     */
    public function isLenient()
    {
    }
    /**
     * @param IntlCalendar|DateTimeInterface|array|string|int|float $datetime
     * @tentative-return-type
     * @alias datefmt_format
     */
    public function format($datetime)
    {
    }
    /**
     * @param IntlCalendar|DateTime $datetime
     * @param array|int|string|null $format
     * @tentative-return-type
     * @alias datefmt_format_object
     */
    public static function formatObject($datetime, $format = null, ?string $locale = null)
    {
    }
    /**
     * @param int $offset
     * @tentative-return-type
     * @alias datefmt_parse
     */
    public function parse(string $string, &$offset = null)
    {
    }
    /**
     * @param int $offset
     * @return array<string, int>|false
     * @tentative-return-type
     * @alias datefmt_localtime
     */
    public function localtime(string $string, &$offset = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_error_code
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_error_message
     */
    public function getErrorMessage()
    {
    }
}