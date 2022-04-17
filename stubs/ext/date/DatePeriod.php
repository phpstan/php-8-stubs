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
    /** @tentative-return-type */
    public function getStartDate()
    {
    }
    /** @tentative-return-type */
    public function getEndDate()
    {
    }
    /** @tentative-return-type */
    public function getDateInterval()
    {
    }
    /** @tentative-return-type */
    public function getRecurrences()
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
    public function getIterator() : Iterator
    {
    }
}