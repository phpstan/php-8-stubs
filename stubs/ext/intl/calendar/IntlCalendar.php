<?php 

/** @generate-class-entries */
class IntlCalendar
{
    private function __construct()
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @return IntlCalendar|null
     * @alias intlcal_create_instance
     */
    #[\Until('8.1')]
    public static function createInstance($timezone = null, ?string $locale = null)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias intlcal_create_instance
     */
    #[\Since('8.1')]
    public static function createInstance($timezone = null, ?string $locale = null) : ?IntlCalendar
    {
    }
    /**
     * @return bool
     * @alias intlcal_equals
     */
    #[\Until('8.1')]
    public function equals(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_equals
     */
    #[\Since('8.1')]
    public function equals(IntlCalendar $other) : bool
    {
    }
    /**
     * @return int|false
     * @alias intlcal_field_difference
     */
    #[\Until('8.1')]
    public function fieldDifference(float $timestamp, int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_field_difference
     */
    #[\Since('8.1')]
    public function fieldDifference(float $timestamp, int $field) : int|false
    {
    }
    /**
     * @return bool
     * @alias intlcal_add
     */
    #[\Until('8.1')]
    public function add(int $field, int $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_add
     */
    #[\Since('8.1')]
    public function add(int $field, int $value) : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_after
     */
    #[\Until('8.1')]
    public function after(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_after
     */
    #[\Since('8.1')]
    public function after(IntlCalendar $other) : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_before
     */
    #[\Until('8.1')]
    public function before(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_before
     */
    #[\Since('8.1')]
    public function before(IntlCalendar $other) : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_clear
     */
    public function clear(?int $field = null)
    {
    }
    /**
     * @return IntlCalendar|null
     * @alias intlcal_from_date_time
     */
    #[\Until('8.1')]
    public static function fromDateTime(DateTime|string $datetime, ?string $locale = null)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias intlcal_from_date_time
     */
    #[\Since('8.1')]
    public static function fromDateTime(DateTime|string $datetime, ?string $locale = null) : ?IntlCalendar
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get
     */
    #[\Until('8.1')]
    public function get(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get
     */
    #[\Since('8.1')]
    public function get(int $field) : int|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_actual_maximum
     */
    #[\Until('8.1')]
    public function getActualMaximum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_actual_maximum
     */
    #[\Since('8.1')]
    public function getActualMaximum(int $field) : int|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_actual_minimum
     */
    #[\Until('8.1')]
    public function getActualMinimum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_actual_minimum
     */
    #[\Since('8.1')]
    public function getActualMinimum(int $field) : int|false
    {
    }
    /**
     * @return array
     * @alias intlcal_get_available_locales
     */
    #[\Until('8.1')]
    public static function getAvailableLocales()
    {
    }
    /**
     * @return array<int, string>
     * @tentative-return-type
     * @alias intlcal_get_available_locales
     */
    #[\Since('8.1')]
    public static function getAvailableLocales() : array
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_day_of_week_type
     */
    #[\Until('8.1')]
    public function getDayOfWeekType(int $dayOfWeek)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_day_of_week_type
     */
    #[\Since('8.1')]
    public function getDayOfWeekType(int $dayOfWeek) : int|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int|false
    {
    }
    /**
     * @return string|false
     * @alias intlcal_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_first_day_of_week
     */
    #[\Until('8.1')]
    public function getFirstDayOfWeek()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_first_day_of_week
     */
    #[\Since('8.1')]
    public function getFirstDayOfWeek() : int|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_greatest_minimum
     */
    #[\Until('8.1')]
    public function getGreatestMinimum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_greatest_minimum
     */
    #[\Since('8.1')]
    public function getGreatestMinimum(int $field) : int|false
    {
    }
    /**
     * @return IntlIterator|false
     * @alias intlcal_get_keyword_values_for_locale
     */
    #[\Until('8.1')]
    public static function getKeywordValuesForLocale(string $keyword, string $locale, bool $onlyCommon)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_keyword_values_for_locale
     */
    #[\Since('8.1')]
    public static function getKeywordValuesForLocale(string $keyword, string $locale, bool $onlyCommon) : IntlIterator|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_least_maximum
     */
    #[\Until('8.1')]
    public function getLeastMaximum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_least_maximum
     */
    #[\Since('8.1')]
    public function getLeastMaximum(int $field) : int|false
    {
    }
    /**
     * @return string|false
     * @alias intlcal_get_locale
     */
    #[\Until('8.1')]
    public function getLocale(int $type)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_locale
     */
    #[\Since('8.1')]
    public function getLocale(int $type) : string|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_maximum
     */
    #[\Until('8.1')]
    public function getMaximum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_maximum
     */
    #[\Since('8.1')]
    public function getMaximum(int $field) : int|false
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_minimal_days_in_first_week
     */
    #[\Until('8.1')]
    public function getMinimalDaysInFirstWeek()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_minimal_days_in_first_week
     */
    #[\Since('8.1')]
    public function getMinimalDaysInFirstWeek() : int|false
    {
    }
    /**
     * @return bool
     * @alias intlcal_set_minimal_days_in_first_week
     */
    public function setMinimalDaysInFirstWeek(int $days)
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_minimum
     */
    #[\Until('8.1')]
    public function getMinimum(int $field)
    {
    }
    // TODO make return void
    /**
     * @tentative-return-type
     * @alias intlcal_get_minimum
     */
    #[\Since('8.1')]
    public function getMinimum(int $field) : int|false
    {
    }
    /**
     * @return float
     * @alias intlcal_get_now
     */
    #[\Until('8.1')]
    public static function getNow()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_now
     */
    #[\Since('8.1')]
    public static function getNow() : float
    {
    }
    /**
     * @return int
     * @alias intlcal_get_repeated_wall_time_option
     */
    #[\Until('8.1')]
    public function getRepeatedWallTimeOption()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_repeated_wall_time_option
     */
    #[\Since('8.1')]
    public function getRepeatedWallTimeOption() : int
    {
    }
    /**
     * @return int
     * @alias intlcal_get_skipped_wall_time_option
     */
    #[\Until('8.1')]
    public function getSkippedWallTimeOption()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_skipped_wall_time_option
     */
    #[\Since('8.1')]
    public function getSkippedWallTimeOption() : int
    {
    }
    /**
     * @return float|false
     * @alias intlcal_get_time
     */
    #[\Until('8.1')]
    public function getTime()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_time
     */
    #[\Since('8.1')]
    public function getTime() : float|false
    {
    }
    /**
     * @return IntlTimeZone|false
     * @alias intlcal_get_time_zone
     */
    #[\Until('8.1')]
    public function getTimeZone()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_time_zone
     */
    #[\Since('8.1')]
    public function getTimeZone() : IntlTimeZone|false
    {
    }
    /**
     * @return string
     * @alias intlcal_get_type
     */
    #[\Until('8.1')]
    public function getType()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_type
     */
    #[\Since('8.1')]
    public function getType() : string
    {
    }
    /**
     * @return int|false
     * @alias intlcal_get_weekend_transition
     */
    #[\Until('8.1')]
    public function getWeekendTransition(int $dayOfWeek)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_weekend_transition
     */
    #[\Since('8.1')]
    public function getWeekendTransition(int $dayOfWeek) : int|false
    {
    }
    /**
     * @return bool
     * @alias intlcal_in_daylight_time
     */
    #[\Until('8.1')]
    public function inDaylightTime()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_in_daylight_time
     */
    #[\Since('8.1')]
    public function inDaylightTime() : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_is_equivalent_to
     */
    #[\Until('8.1')]
    public function isEquivalentTo(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_equivalent_to
     */
    #[\Since('8.1')]
    public function isEquivalentTo(IntlCalendar $other) : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_is_lenient
     */
    #[\Until('8.1')]
    public function isLenient()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_lenient
     */
    #[\Since('8.1')]
    public function isLenient() : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_is_weekend
     */
    #[\Until('8.1')]
    public function isWeekend(?float $timestamp = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_weekend
     */
    #[\Since('8.1')]
    public function isWeekend(?float $timestamp = null) : bool
    {
    }
    /**
     * @param int|bool $value
     * @return bool
     * @alias intlcal_roll
     */
    #[\Until('8.1')]
    public function roll(int $field, $value)
    {
    }
    /**
     * @param int|bool $value
     * @alias intlcal_roll
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function roll(int $field, $value) : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_is_set
     */
    #[\Until('8.1')]
    public function isSet(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_set
     */
    #[\Since('8.1')]
    public function isSet(int $field) : bool
    {
    }
    /**
     * @return bool
     * @alias intlcal_set
     */
    public function set(int $year, int $month, int $dayOfMonth = UNKNOWN, int $hour = UNKNOWN, int $minute = UNKNOWN, int $second = UNKNOWN)
    {
    }
    // TODO make return type void
    /**
     * @return bool
     * @alias intlcal_set_first_day_of_week
     */
    public function setFirstDayOfWeek(int $dayOfWeek)
    {
    }
    // TODO make return type void
    /**
     * @return bool
     * @alias intlcal_set_lenient
     */
    public function setLenient(bool $lenient)
    {
    }
    // TODO make return type void
    /**
     * @return bool
     * @alias intlcal_set_repeated_wall_time_option
     */
    public function setRepeatedWallTimeOption(int $option)
    {
    }
    // TODO make return type void
    /**
     * @return bool
     * @alias intlcal_set_skipped_wall_time_option
     */
    public function setSkippedWallTimeOption(int $option)
    {
    }
    /**
     * @return bool
     * @alias intlcal_set_time
     */
    #[\Until('8.1')]
    public function setTime(float $timestamp)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias intlcal_set_time
     */
    #[\Since('8.1')]
    public function setTime(float $timestamp) : bool
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @return bool
     * @alias intlcal_set_time_zone
     */
    #[\Until('8.1')]
    public function setTimeZone($timezone)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias intlcal_set_time_zone
     */
    #[\Since('8.1')]
    public function setTimeZone($timezone) : bool
    {
    }
    /**
     * @return DateTime|false
     * @alias intlcal_to_date_time
     */
    #[\Until('8.1')]
    public function toDateTime()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_to_date_time
     */
    #[\Since('8.1')]
    public function toDateTime() : DateTime|false
    {
    }
}