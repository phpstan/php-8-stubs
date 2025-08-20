<?php 

class DateTime implements \DateTimeInterface
{
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function __serialize(): array
    {
    }
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function __unserialize(array $data): void
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function __serialize(): array
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function __unserialize(array $data): void
    {
    }
    public function __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __serialize(): array
    {
    }
    #[\Since('8.5')]
    public function __serialize(): array
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __unserialize(array $data): void
    {
    }
    #[\Since('8.5')]
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
     * @return DateTime
     */
    public static function __set_state(array $array)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTime
     */
    public static function createFromImmutable(DateTimeImmutable $object)
    {
    }
    public static function createFromInterface(DateTimeInterface $object): DateTime
    {
    }
    /**
     * @tentative-return-type
     * @alias date_create_from_format
     * @return (DateTime | false)
     */
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.4')]
    #[\Until('8.5')]
    public static function createFromTimestamp(int|float $timestamp): static
    {
    }
    /** @tentative-return-type */
    #[\Since('8.5')]
    public static function createFromTimestamp(int|float $timestamp): static
    {
    }
    /**
     * @return array|false
     * @alias date_get_last_errors
     */
    public static function getLastErrors()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_format
     * @return string
     */
    public function format(string $format)
    {
    }
    /**
     * @tentative-return-type
     * @return (DateTime | false)
     */
    public function modify(string $modifier)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_add
     * @return DateTime
     */
    public function add(DateInterval $interval)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTime
     */
    public function sub(DateInterval $interval)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timezone_get
     * @return (DateTimeZone | false)
     */
    public function getTimezone()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timezone_set
     * @return DateTime
     */
    public function setTimezone(DateTimeZone $timezone)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_offset_get
     * @return int
     */
    public function getOffset()
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getMicrosecond(): int
    {
    }
    #[\Since('8.5')]
    public function getMicrosecond(): int
    {
    }
    /**
     * @tentative-return-type
     * @alias date_time_set
     * @return DateTime
     */
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_date_set
     * @return DateTime
     */
    public function setDate(int $year, int $month, int $day)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_isodate_set
     * @return DateTime
     */
    public function setISODate(int $year, int $week, int $dayOfWeek = 1)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timestamp_set
     * @return DateTime
     */
    public function setTimestamp(int $timestamp)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function setMicrosecond(int $microsecond): static
    {
    }
    #[\Since('8.5')]
    public function setMicrosecond(int $microsecond): static
    {
    }
    /**
     * @tentative-return-type
     * @alias date_timestamp_get
     * @return int
     */
    public function getTimestamp()
    {
    }
    /**
     * @tentative-return-type
     * @alias date_diff
     * @return DateInterval
     */
    public function diff(DateTimeInterface $targetObject, bool $absolute = false)
    {
    }
}