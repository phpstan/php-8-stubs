<?php 

class DateTimeImmutable implements \DateTimeInterface
{
    public function __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
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
    #[\Until('8.5')]
    public function __wakeup()
    {
    }
    /** @tentative-return-type */
    #[\Deprecated(since: '8.5', message: 'this method is obsolete, as serialization hooks are provided by __unserialize() and __serialize()')]
    #[\Since('8.5')]
    public function __wakeup()
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    public static function __set_state(array $array)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_create_immutable_from_format
     * @return (DateTimeImmutable | false)
     */
    public static function createFromFormat(string $format, string $datetime, ?DateTimeZone $timezone = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.4')]
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
     * @alias date_timezone_get
     * @return (DateTimeZone | false)
     */
    public function getTimezone()
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
    /**
     * @tentative-return-type
     * @alias date_timestamp_get
     * @return int
     */
    public function getTimestamp()
    {
    }
    /**
     * @alias DateTime::getMicrosecond
     */
    #[\Since('8.4')]
    public function getMicrosecond(): int
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
    /**
     * @tentative-return-type
     * @return (DateTimeImmutable | false)
     */
    #[\Until('8.5')]
    public function modify(string $modifier)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::modify() does not modify the object itself")]
    #[\Since('8.5')]
    public function modify(string $modifier)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function add(DateInterval $interval)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::add() does not modify the object itself")]
    #[\Since('8.5')]
    public function add(DateInterval $interval)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function sub(DateInterval $interval)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::sub() does not modify the object itself")]
    #[\Since('8.5')]
    public function sub(DateInterval $interval)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function setTimezone(DateTimeZone $timezone)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::setTimezone() does not modify the object itself")]
    #[\Since('8.5')]
    public function setTimezone(DateTimeZone $timezone)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::setTime() does not modify the object itself")]
    #[\Since('8.5')]
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function setDate(int $year, int $month, int $day)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::setDate() does not modify the object itself")]
    #[\Since('8.5')]
    public function setDate(int $year, int $month, int $day)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function setISODate(int $year, int $week, int $dayOfWeek = 1)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::setISODate() does not modify the object itself")]
    #[\Since('8.5')]
    public function setISODate(int $year, int $week, int $dayOfWeek = 1)
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    #[\Until('8.5')]
    public function setTimestamp(int $timestamp)
    {
    }
    /** @tentative-return-type */
    #[\NoDiscard(message: "as DateTimeImmutable::setTimestamp() does not modify the object itself")]
    #[\Since('8.5')]
    public function setTimestamp(int $timestamp)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function setMicrosecond(int $microsecond): static
    {
    }
    #[\NoDiscard(message: "as DateTimeImmutable::setMicrosecond() does not modify the object itself")]
    #[\Since('8.5')]
    public function setMicrosecond(int $microsecond): static
    {
    }
    /**
     * @tentative-return-type
     * @return DateTimeImmutable
     */
    public static function createFromMutable(DateTime $object)
    {
    }
    public static function createFromInterface(DateTimeInterface $object): DateTimeImmutable
    {
    }
}