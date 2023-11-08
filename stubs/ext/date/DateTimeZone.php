<?php 

class DateTimeZone
{
    public function __construct(string $timezone)
    {
    }
    /**
     * @tentative-return-type
     * @alias timezone_name_get
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @tentative-return-type
     * @alias timezone_offset_get
     * @return int
     */
    public function getOffset(DateTimeInterface $datetime)
    {
    }
    /**
     * @return array|false
     * @alias timezone_transitions_get
     */
    public function getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX)
    {
    }
    /**
     * @return array|false
     * @alias timezone_location_get
     */
    public function getLocation()
    {
    }
    /**
     * @return array
     * @alias timezone_abbreviations_list
     */
    public static function listAbbreviations()
    {
    }
    /**
     * @return array
     * @alias timezone_identifiers_list
     */
    public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null)
    {
    }
    #[\Since('8.2')]
    public function __serialize(): array
    {
    }
    #[\Since('8.2')]
    public function __unserialize(array $data): void
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function __wakeup()
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeZone
     */
    public static function __set_state(array $array)
    {
    }
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_AFRICA
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const AFRICA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_AFRICA
     */
    #[\Since('8.3')]
    public const AFRICA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_AMERICA
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const AMERICA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_AMERICA
     */
    #[\Since('8.3')]
    public const AMERICA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ANTARCTICA
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ANTARCTICA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ANTARCTICA
     */
    #[\Since('8.3')]
    public const ANTARCTICA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ARCTIC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ARCTIC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ARCTIC
     */
    #[\Since('8.3')]
    public const ARCTIC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ASIA
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ASIA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ASIA
     */
    #[\Since('8.3')]
    public const ASIA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ATLANTIC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ATLANTIC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ATLANTIC
     */
    #[\Since('8.3')]
    public const ATLANTIC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_AUSTRALIA
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const AUSTRALIA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_AUSTRALIA
     */
    #[\Since('8.3')]
    public const AUSTRALIA = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_EUROPE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const EUROPE = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_EUROPE
     */
    #[\Since('8.3')]
    public const EUROPE = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_INDIAN
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const INDIAN = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_INDIAN
     */
    #[\Since('8.3')]
    public const INDIAN = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_PACIFIC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PACIFIC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_PACIFIC
     */
    #[\Since('8.3')]
    public const PACIFIC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_UTC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const UTC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_UTC
     */
    #[\Since('8.3')]
    public const UTC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ALL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ALL = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ALL
     */
    #[\Since('8.3')]
    public const ALL = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ALL_W_BC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ALL_WITH_BC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_GROUP_ALL_W_BC
     */
    #[\Since('8.3')]
    public const ALL_WITH_BC = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_PER_COUNTRY
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PER_COUNTRY = UNKNOWN;
    /**
     * @var int
     * @cvalue PHP_DATE_TIMEZONE_PER_COUNTRY
     */
    #[\Since('8.3')]
    public const PER_COUNTRY = UNKNOWN;
}