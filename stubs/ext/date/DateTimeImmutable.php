<?php 

class DateTimeImmutable implements \DateTimeInterface
{
    public function __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
    {
    }
    /** @tentative-return-type */
    public function __wakeup()
    {
    }
    /** @tentative-return-type */
    public static function __set_state(array $array)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_create_immutable_from_format
     */
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null)
    {
    }
    /**
     * @return array<string, int|array>|false
     * @tentative-return-type
     * @alias date_get_last_errors
     */
    public static function getLastErrors()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_format
     */
    public function format(string $format)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timezone_get
     */
    public function getTimezone()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_offset_get
     */
    public function getOffset()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timestamp_get
     */
    public function getTimestamp()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_diff
     */
    public function diff(DateTimeInterface $targetObject, bool $absolute = false)
    {
    }
    /** @tentative-return-type */
    public function modify(string $modifier)
    {
    }
    /** @tentative-return-type */
    public function add(DateInterval $interval)
    {
    }
    /** @tentative-return-type */
    public function sub(DateInterval $interval)
    {
    }
    /** @tentative-return-type */
    public function setTimezone(DateTimeZone $timezone)
    {
    }
    /** @tentative-return-type */
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)
    {
    }
    /** @tentative-return-type */
    public function setDate(int $year, int $month, int $day)
    {
    }
    /** @tentative-return-type */
    public function setISODate(int $year, int $week, int $dayOfWeek = 1)
    {
    }
    /** @tentative-return-type */
    public function setTimestamp(int $timestamp)
    {
    }
    /** @tentative-return-type */
    public static function createFromMutable(DateTime $object)
    {
    }
    public static function createFromInterface(DateTimeInterface $object) : DateTimeImmutable
    {
    }
}