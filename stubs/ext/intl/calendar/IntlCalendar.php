<?php 

/** @generate-class-entries */
class IntlCalendar
{
    private function __construct()
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias intlcal_create_instance
     */
    public static function createInstance($timezone = null, ?string $locale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_equals
     */
    public function equals(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_field_difference
     */
    public function fieldDifference(float $timestamp, int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_add
     */
    public function add(int $field, int $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_after
     */
    public function after(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_before
     */
    public function before(IntlCalendar $other)
    {
    }
    /**
     * @return bool
     * @alias intlcal_clear
     */
    public function clear(?int $field = null)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias intlcal_from_date_time
     */
    public static function fromDateTime(DateTime|string $datetime, ?string $locale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get
     */
    public function get(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_actual_maximum
     */
    public function getActualMaximum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_actual_minimum
     */
    public function getActualMinimum(int $field)
    {
    }
    /**
     * @return array<int, string>
     * @tentative-return-type
     * @alias intlcal_get_available_locales
     */
    public static function getAvailableLocales()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_day_of_week_type
     */
    public function getDayOfWeekType(int $dayOfWeek)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_error_code
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_error_message
     */
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_first_day_of_week
     */
    public function getFirstDayOfWeek()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_greatest_minimum
     */
    public function getGreatestMinimum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_keyword_values_for_locale
     */
    public static function getKeywordValuesForLocale(string $keyword, string $locale, bool $onlyCommon)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_least_maximum
     */
    public function getLeastMaximum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_locale
     */
    public function getLocale(int $type)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_maximum
     */
    public function getMaximum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_minimal_days_in_first_week
     */
    public function getMinimalDaysInFirstWeek()
    {
    }
    /**
     * @return bool
     * @alias intlcal_set_minimal_days_in_first_week
     */
    public function setMinimalDaysInFirstWeek(int $days)
    {
    }
    // TODO make return void
    /**
     * @tentative-return-type
     * @alias intlcal_get_minimum
     */
    public function getMinimum(int $field)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_now
     */
    public static function getNow()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_repeated_wall_time_option
     */
    public function getRepeatedWallTimeOption()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_skipped_wall_time_option
     */
    public function getSkippedWallTimeOption()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_time
     */
    public function getTime()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_time_zone
     */
    public function getTimeZone()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_type
     */
    public function getType()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_get_weekend_transition
     */
    public function getWeekendTransition(int $dayOfWeek)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_in_daylight_time
     */
    public function inDaylightTime()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_equivalent_to
     */
    public function isEquivalentTo(IntlCalendar $other)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_lenient
     */
    public function isLenient()
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_weekend
     */
    public function isWeekend(?float $timestamp = null)
    {
    }
    /**
     * @param int|bool $value
     * @alias intlcal_roll
     * @tentative-return-type
     */
    public function roll(int $field, $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_is_set
     */
    public function isSet(int $field)
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
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias intlcal_set_time
     */
    public function setTime(float $timestamp)
    {
    }
    /**
     * @param IntlTimeZone|DateTimeZone|string|null $timezone
     * @tentative-return-type
     * @alias intlcal_set_time_zone
     */
    public function setTimeZone($timezone)
    {
    }
    /**
     * @tentative-return-type
     * @alias intlcal_to_date_time
     */
    public function toDateTime()
    {
    }
}