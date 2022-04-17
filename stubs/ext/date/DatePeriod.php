<?php 

class DatePeriod implements \IteratorAggregate
{
    /**
     * @param DateTimeInterface|string $start
     * @param DateInterval|int $interval
     * @param DateTimeInterface|int $end
     * @param int $options
     */
    public function __construct($start, $interval = UNKNOWN, $end = UNKNOWN, $options = UNKNOWN)
    {
    }
    /** @return DateTimeInterface */
    #[\Until('8.1')]
    public function getStartDate()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStartDate() : DateTimeInterface
    {
    }
    /** @return DateTimeInterface|null */
    #[\Until('8.1')]
    public function getEndDate()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getEndDate() : ?DateTimeInterface
    {
    }
    /** @return DateInterval */
    #[\Until('8.1')]
    public function getDateInterval()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDateInterval() : DateInterval
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public function getRecurrences()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getRecurrences() : ?int
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
    /** @return DatePeriod */
    #[\Until('8.1')]
    public static function __set_state(array $array)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function __set_state(array $array) : DatePeriod
    {
    }
    public function getIterator() : Iterator
    {
    }
}