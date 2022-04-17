<?php 

class DateTimeZone
{
    public function __construct(string $timezone)
    {
    }
    /**
     * @return string
     * @alias timezone_name_get
     */
    #[\Until('8.1')]
    public function getName()
    {
    }
    /**
     * @tentative-return-type
     * @alias timezone_name_get
     */
    #[\Since('8.1')]
    public function getName() : string
    {
    }
    /**
     * @return int
     * @alias timezone_offset_get
     */
    #[\Until('8.1')]
    public function getOffset(DateTimeInterface $datetime)
    {
    }
    /**
     * @tentative-return-type
     * @alias timezone_offset_get
     */
    #[\Since('8.1')]
    public function getOffset(DateTimeInterface $datetime) : int
    {
    }
    /**
     * @return array|false
     * @alias timezone_transitions_get
     */
    #[\Until('8.1')]
    public function getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX)
    {
    }
    /**
     * @return array<int, array>|false
     * @tentative-return-type
     * @alias timezone_transitions_get
     */
    #[\Since('8.1')]
    public function getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX) : array|false
    {
    }
    /**
     * @return array|false
     * @alias timezone_location_get
     */
    #[\Until('8.1')]
    public function getLocation()
    {
    }
    /**
     * @return array<string, float|string>|false
     * @tentative-return-type
     * @alias timezone_location_get
     */
    #[\Since('8.1')]
    public function getLocation() : array|false
    {
    }
    /**
     * @return array
     * @alias timezone_abbreviations_list
     */
    #[\Until('8.1')]
    public static function listAbbreviations()
    {
    }
    /**
     * @return array<string, array>
     * @tentative-return-type
     * @alias timezone_abbreviations_list
     */
    #[\Since('8.1')]
    public static function listAbbreviations() : array
    {
    }
    /**
     * @return array
     * @alias timezone_identifiers_list
     */
    #[\Until('8.1')]
    public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null)
    {
    }
    /**
     * @return array<int, string>
     * @tentative-return-type
     * @alias timezone_identifiers_list
     */
    #[\Since('8.1')]
    public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null) : array
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function __wakeup()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __wakeup() : void
    {
    }
    /** @return DateTimeZone */
    #[\Until('8.1')]
    public static function __set_state(array $array)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function __set_state(array $array) : DateTimeZone
    {
    }
}