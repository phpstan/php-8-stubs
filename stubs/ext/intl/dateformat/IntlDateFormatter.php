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
    public static function create(?string $locale, int $dateType = IntlDateFormatter::FULL, int $timeType = IntlDateFormatter::FULL, $timezone = null, IntlCalendar|int|null $calendar = null, ?string $pattern = null) : ?IntlDateFormatter
    {
    }
    /**
     * @return int|false
     * @alias datefmt_get_datetype
     */
    #[\Until('8.1')]
    public function getDateType()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_datetype
     */
    #[\Since('8.1')]
    public function getDateType() : int|false
    {
    }
    /**
     * @return int|false
     * @alias datefmt_get_timetype
     */
    #[\Until('8.1')]
    public function getTimeType()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_timetype
     */
    #[\Since('8.1')]
    public function getTimeType() : int|false
    {
    }
    /**
     * @return int|false
     * @alias datefmt_get_calendar
     */
    #[\Until('8.1')]
    public function getCalendar()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_calendar
     */
    #[\Since('8.1')]
    public function getCalendar() : int|false
    {
    }
    /**
     * @return bool
     * @alias datefmt_set_calendar
     */
    #[\Until('8.1')]
    public function setCalendar(IntlCalendar|int|null $calendar)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_set_calendar
     */
    #[\Since('8.1')]
    public function setCalendar(IntlCalendar|int|null $calendar) : bool
    {
    }
    /**
     * @return string|false
     * @alias datefmt_get_timezone_id
     */
    #[\Until('8.1')]
    public function getTimeZoneId()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_timezone_id
     */
    #[\Since('8.1')]
    public function getTimeZoneId() : string|false
    {
    }
    /**
     * @return IntlCalendar|false|null
     * @alias datefmt_get_calendar_object
     */
    #[\Until('8.1')]
    public function getCalendarObject()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_calendar_object
     */
    #[\Since('8.1')]
    public function getCalendarObject() : IntlCalendar|false|null
    {
    }
    /**
     * @return IntlTimeZone|false
     * @alias datefmt_get_timezone
     */
    #[\Until('8.1')]
    public function getTimeZone()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_timezone
     */
    #[\Since('8.1')]
    public function getTimeZone() : IntlTimeZone|false
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @return bool|null
     * @alias datefmt_set_timezone
     */
    #[\Until('8.1')]
    public function setTimeZone($timezone)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias datefmt_set_timezone
     */
    #[\Since('8.1')]
    public function setTimeZone($timezone) : ?bool
    {
    }
    /**
     * @return bool
     * @alias datefmt_set_pattern
     */
    #[\Until('8.1')]
    public function setPattern(string $pattern)
    {
    }
    // TODO return true on success
    /**
     * @tentative-return-type
     * @alias datefmt_set_pattern
     */
    #[\Since('8.1')]
    public function setPattern(string $pattern) : bool
    {
    }
    /**
     * @return string|false
     * @alias datefmt_get_pattern
     */
    #[\Until('8.1')]
    public function getPattern()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_pattern
     */
    #[\Since('8.1')]
    public function getPattern() : string|false
    {
    }
    /**
     * @return string|false
     * @alias datefmt_get_locale
     */
    #[\Until('8.1')]
    public function getLocale(int $type = ULOC_ACTUAL_LOCALE)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_locale
     */
    #[\Since('8.1')]
    public function getLocale(int $type = ULOC_ACTUAL_LOCALE) : string|false
    {
    }
    /**
     * @return void
     * @alias datefmt_set_lenient
     */
    #[\Until('8.1')]
    public function setLenient(bool $lenient)
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_set_lenient
     */
    #[\Since('8.1')]
    public function setLenient(bool $lenient) : void
    {
    }
    /**
     * @return bool
     * @alias datefmt_is_lenient
     */
    #[\Until('8.1')]
    public function isLenient()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_is_lenient
     */
    #[\Since('8.1')]
    public function isLenient() : bool
    {
    }
    /**
     * @param IntlCalendar|DateTimeInterface|array|string|int|float $datetime
     * @return string|false
     * @alias datefmt_format
     */
    #[\Until('8.1')]
    public function format($datetime)
    {
    }
    /**
     * @param IntlCalendar|DateTimeInterface|array|string|int|float $datetime
     * @tentative-return-type
     * @alias datefmt_format
     */
    #[\Since('8.1')]
    public function format($datetime) : string|false
    {
    }
    /**
     * @param IntlCalendar|DateTime $datetime
     * @param array|int|string|null $format
     * @return string|false
     * @alias datefmt_format_object
     */
    #[\Until('8.1')]
    public static function formatObject($datetime, $format = null, ?string $locale = null)
    {
    }
    /**
     * @param IntlCalendar|DateTime $datetime
     * @param array|int|string|null $format
     * @tentative-return-type
     * @alias datefmt_format_object
     */
    #[\Since('8.1')]
    public static function formatObject($datetime, $format = null, ?string $locale = null) : string|false
    {
    }
    /**
     * @param int $offset
     * @return int|float|false
     * @alias datefmt_parse
     */
    #[\Until('8.1')]
    public function parse(string $string, &$offset = null)
    {
    }
    /**
     * @param int $offset
     * @tentative-return-type
     * @alias datefmt_parse
     */
    #[\Since('8.1')]
    public function parse(string $string, &$offset = null) : int|float|false
    {
    }
    /**
     * @param int $offset
     * @return array|false
     * @alias datefmt_localtime
     */
    #[\Until('8.1')]
    public function localtime(string $string, &$offset = null)
    {
    }
    /**
     * @param int $offset
     * @return array<string, int>|false
     * @tentative-return-type
     * @alias datefmt_localtime
     */
    #[\Since('8.1')]
    public function localtime(string $string, &$offset = null) : array|false
    {
    }
    /**
     * @return int
     * @alias datefmt_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int
    {
    }
    /**
     * @return string
     * @alias datefmt_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias datefmt_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string
    {
    }
}