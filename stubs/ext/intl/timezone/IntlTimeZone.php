<?php 

/** @generate-class-entries */
class IntlTimeZone
{
    private function __construct()
    {
    }
    /**
     * @return int|false
     * @alias intltz_count_equivalent_ids
     */
    #[\Until('8.1')]
    public static function countEquivalentIDs(string $timezoneId)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_count_equivalent_ids
     */
    #[\Since('8.1')]
    public static function countEquivalentIDs(string $timezoneId) : int|false
    {
    }
    /**
     * @return IntlTimeZone
     * @alias intltz_create_default
     */
    #[\Until('8.1')]
    public static function createDefault()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_create_default
     */
    #[\Since('8.1')]
    public static function createDefault() : IntlTimeZone
    {
    }
    /**
     * @param IntlTimeZone|string|int|float|null $countryOrRawOffset
     * @return IntlIterator|false
     * @alias intltz_create_enumeration
     */
    #[\Until('8.1')]
    public static function createEnumeration($countryOrRawOffset = null)
    {
    }
    /**
     * @param IntlTimeZone|string|int|float|null $countryOrRawOffset
     * @tentative-return-type
     * @alias intltz_create_enumeration
     */
    #[\Since('8.1')]
    public static function createEnumeration($countryOrRawOffset = null) : IntlIterator|false
    {
    }
    /**
     * @return IntlTimeZone|null
     * @alias intltz_create_time_zone
     */
    #[\Until('8.1')]
    public static function createTimeZone(string $timezoneId)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_create_time_zone
     */
    #[\Since('8.1')]
    public static function createTimeZone(string $timezoneId) : ?IntlTimeZone
    {
    }
    /**
     * @return IntlIterator|false
     * @alias intltz_create_time_zone_id_enumeration
     */
    #[\Until('8.1')]
    public static function createTimeZoneIDEnumeration(int $type, ?string $region = null, ?int $rawOffset = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_create_time_zone_id_enumeration
     */
    #[\Since('8.1')]
    public static function createTimeZoneIDEnumeration(int $type, ?string $region = null, ?int $rawOffset = null) : IntlIterator|false
    {
    }
    /**
     * @return IntlTimeZone|null
     * @alias intltz_from_date_time_zone
     */
    #[\Until('8.1')]
    public static function fromDateTimeZone(DateTimeZone $timezone)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_from_date_time_zone
     */
    #[\Since('8.1')]
    public static function fromDateTimeZone(DateTimeZone $timezone) : ?IntlTimeZone
    {
    }
    /**
     * @param bool $isSystemId
     * @return string|false
     * @alias intltz_get_canonical_id
     */
    #[\Until('8.1')]
    public static function getCanonicalID(string $timezoneId, &$isSystemId = null)
    {
    }
    /**
     * @param bool $isSystemId
     * @tentative-return-type
     * @alias intltz_get_canonical_id
     */
    #[\Since('8.1')]
    public static function getCanonicalID(string $timezoneId, &$isSystemId = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_display_name
     */
    #[\Until('8.1')]
    public function getDisplayName(bool $dst = false, int $style = IntlTimeZone::DISPLAY_LONG, ?string $locale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_display_name
     */
    #[\Since('8.1')]
    public function getDisplayName(bool $dst = false, int $style = IntlTimeZone::DISPLAY_LONG, ?string $locale = null) : string|false
    {
    }
    /**
     * @return int
     * @alias intltz_get_dst_savings
     */
    #[\Until('8.1')]
    public function getDSTSavings()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_dst_savings
     */
    #[\Since('8.1')]
    public function getDSTSavings() : int
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_equivalent_id
     */
    #[\Until('8.1')]
    public static function getEquivalentID(string $timezoneId, int $offset)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_equivalent_id
     */
    #[\Since('8.1')]
    public static function getEquivalentID(string $timezoneId, int $offset) : string|false
    {
    }
    /**
     * @return int|false
     * @alias intltz_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int|false
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string|false
    {
    }
    /**
     * @return IntlTimeZone
     * @alias intltz_get_gmt
     */
    #[\Until('8.1')]
    public static function getGMT()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_gmt
     */
    #[\Since('8.1')]
    public static function getGMT() : IntlTimeZone
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_id
     */
    #[\Until('8.1')]
    public function getID()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_id
     */
    #[\Since('8.1')]
    public function getID() : string|false
    {
    }
    /**
     * @param int $rawOffset
     * @param int $dstOffset
     * @return bool
     * @alias intltz_get_offset
     */
    #[\Until('8.1')]
    public function getOffset(float $timestamp, bool $local, &$rawOffset, &$dstOffset)
    {
    }
    /**
     * @param int $rawOffset
     * @param int $dstOffset
     * @tentative-return-type
     * @alias intltz_get_offset
     */
    #[\Since('8.1')]
    public function getOffset(float $timestamp, bool $local, &$rawOffset, &$dstOffset) : bool
    {
    }
    /**
     * @return int
     * @alias intltz_get_raw_offset
     */
    #[\Until('8.1')]
    public function getRawOffset()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_raw_offset
     */
    #[\Since('8.1')]
    public function getRawOffset() : int
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_region
     */
    #[\Until('8.1')]
    public static function getRegion(string $timezoneId)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_region
     */
    #[\Since('8.1')]
    public static function getRegion(string $timezoneId) : string|false
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_tz_data_version
     */
    #[\Until('8.1')]
    public static function getTZDataVersion()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_tz_data_version
     */
    #[\Since('8.1')]
    public static function getTZDataVersion() : string|false
    {
    }
    /**
     * @return IntlTimeZone
     * @alias intltz_get_unknown
     */
    #[\Until('8.1')]
    public static function getUnknown()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_unknown
     */
    #[\Since('8.1')]
    public static function getUnknown() : IntlTimeZone
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 52
    /**
     * @return string|false
     * @alias intltz_get_windows_id
     */
    #[\Until('8.1')]
    public static function getWindowsID(string $timezoneId)
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 52
    /**
     * @tentative-return-type
     * @alias intltz_get_windows_id
     */
    #[\Since('8.1')]
    public static function getWindowsID(string $timezoneId) : string|false
    {
    }
    /**
     * @return string|false
     * @alias intltz_get_id_for_windows_id
     */
    #[\Until('8.1')]
    public static function getIDForWindowsID(string $timezoneId, ?string $region = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_get_id_for_windows_id
     */
    #[\Since('8.1')]
    public static function getIDForWindowsID(string $timezoneId, ?string $region = null) : string|false
    {
    }
    #endif
    /**
     * @return bool
     * @alias intltz_has_same_rules
     */
    #[\Until('8.1')]
    public function hasSameRules(IntlTimeZone $other)
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias intltz_has_same_rules
     */
    #[\Since('8.1')]
    public function hasSameRules(IntlTimeZone $other) : bool
    {
    }
    /**
     * @return DateTimeZone|false
     * @alias intltz_to_date_time_zone
     */
    #[\Until('8.1')]
    public function toDateTimeZone()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_to_date_time_zone
     */
    #[\Since('8.1')]
    public function toDateTimeZone() : DateTimeZone|false
    {
    }
    /**
     * @return bool
     * @alias intltz_use_daylight_time
     */
    #[\Until('8.1')]
    public function useDaylightTime()
    {
    }
    /**
     * @tentative-return-type
     * @alias intltz_use_daylight_time
     */
    #[\Since('8.1')]
    public function useDaylightTime() : bool
    {
    }
}