<?php 

class DateTime implements \DateTimeInterface
{
    public function __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
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
    /** @return DateTime */
    #[\Until('8.1')]
    public static function __set_state(array $array)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function __set_state(array $array) : DateTime
    {
    }
    /** @return DateTime */
    #[\Until('8.1')]
    public static function createFromImmutable(DateTimeImmutable $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createFromImmutable(DateTimeImmutable $object) : DateTime
    {
    }
    public static function createFromInterface(DateTimeInterface $object) : DateTime
    {
    }
    /**
     * @return DateTime|false
     * @alias date_create_from_format
     */
    #[\Until('8.1')]
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_create_from_format
     */
    #[\Since('8.1')]
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null) : DateTime|false
    {
    }
    /**
     * @return array|false
     * @alias date_get_last_errors
     */
    #[\Until('8.1')]
    public static function getLastErrors()
    {
    }
    /**
     * @return array<string, int|array>|false
     * @tentative-return-type
     * @alias date_get_last_errors
     */
    #[\Since('8.1')]
    public static function getLastErrors() : array|false
    {
    }
    /**
     * @return string
     * @alias date_format
     */
    #[\Until('8.1')]
    public function format(string $format)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_format
     */
    #[\Since('8.1')]
    public function format(string $format) : string
    {
    }
    /**
     * @return DateTime|false
     * @alias date_modify
     */
    #[\Until('8.1')]
    public function modify(string $modifier)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_modify
     */
    #[\Since('8.1')]
    public function modify(string $modifier) : DateTime|false
    {
    }
    /**
     * @return DateTime
     * @alias date_add
     */
    #[\Until('8.1')]
    public function add(DateInterval $interval)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_add
     */
    #[\Since('8.1')]
    public function add(DateInterval $interval) : DateTime
    {
    }
    /**
     * @return DateTime
     * @alias date_sub
     */
    #[\Until('8.1')]
    public function sub(DateInterval $interval)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_sub
     */
    #[\Since('8.1')]
    public function sub(DateInterval $interval) : DateTime
    {
    }
    /**
     * @return DateTimeZone|false
     * @alias date_timezone_get
     */
    #[\Until('8.1')]
    public function getTimezone()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timezone_get
     */
    #[\Since('8.1')]
    public function getTimezone() : DateTimeZone|false
    {
    }
    /**
     * @return DateTime
     * @alias date_timezone_set
     */
    #[\Until('8.1')]
    public function setTimezone(DateTimeZone $timezone)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timezone_set
     */
    #[\Since('8.1')]
    public function setTimezone(DateTimeZone $timezone) : DateTime
    {
    }
    /**
     * @return int
     * @alias date_offset_get
     */
    #[\Until('8.1')]
    public function getOffset()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_offset_get
     */
    #[\Since('8.1')]
    public function getOffset() : int
    {
    }
    /**
     * @return DateTime
     * @alias date_time_set
     */
    #[\Until('8.1')]
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_time_set
     */
    #[\Since('8.1')]
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0) : DateTime
    {
    }
    /**
     * @return DateTime
     * @alias date_date_set
     */
    #[\Until('8.1')]
    public function setDate(int $year, int $month, int $day)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_date_set
     */
    #[\Since('8.1')]
    public function setDate(int $year, int $month, int $day) : DateTime
    {
    }
    /**
     * @return DateTime
     * @alias date_isodate_set
     */
    #[\Until('8.1')]
    public function setISODate(int $year, int $week, int $dayOfWeek = 1)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_isodate_set
     */
    #[\Since('8.1')]
    public function setISODate(int $year, int $week, int $dayOfWeek = 1) : DateTime
    {
    }
    /**
     * @return DateTime
     * @alias date_timestamp_set
     */
    #[\Until('8.1')]
    public function setTimestamp(int $timestamp)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timestamp_set
     */
    #[\Since('8.1')]
    public function setTimestamp(int $timestamp) : DateTime
    {
    }
    /**
     * @return int
     * @alias date_timestamp_get
     */
    #[\Until('8.1')]
    public function getTimestamp()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timestamp_get
     */
    #[\Since('8.1')]
    public function getTimestamp() : int
    {
    }
    /**
     * @return DateInterval
     * @alias date_diff
     */
    #[\Until('8.1')]
    public function diff(DateTimeInterface $targetObject, bool $absolute = false)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_diff
     */
    #[\Since('8.1')]
    public function diff(DateTimeInterface $targetObject, bool $absolute = false) : DateInterval
    {
    }
}