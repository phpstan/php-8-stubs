<?php 

class DateTimeImmutable implements \DateTimeInterface
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
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public static function __set_state(array $array)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function __set_state(array $array) : DateTimeImmutable
    {
    }
    /**
     * @return DateTimeImmutable|false
     * @alias date_create_immutable_from_format
     */
    #[\Until('8.1')]
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_create_immutable_from_format
     */
    #[\Since('8.1')]
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null) : DateTimeImmutable|false
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
    /** @return DateTimeImmutable|false */
    #[\Until('8.1')]
    public function modify(string $modifier)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function modify(string $modifier) : DateTimeImmutable|false
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function add(DateInterval $interval)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function add(DateInterval $interval) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function sub(DateInterval $interval)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function sub(DateInterval $interval) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function setTimezone(DateTimeZone $timezone)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setTimezone(DateTimeZone $timezone) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function setDate(int $year, int $month, int $day)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setDate(int $year, int $month, int $day) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function setISODate(int $year, int $week, int $dayOfWeek = 1)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setISODate(int $year, int $week, int $dayOfWeek = 1) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public function setTimestamp(int $timestamp)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setTimestamp(int $timestamp) : DateTimeImmutable
    {
    }
    /** @return DateTimeImmutable */
    #[\Until('8.1')]
    public static function createFromMutable(DateTime $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createFromMutable(DateTime $object) : DateTimeImmutable
    {
    }
    public static function createFromInterface(DateTimeInterface $object) : DateTimeImmutable
    {
    }
}