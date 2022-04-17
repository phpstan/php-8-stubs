<?php 

class DateInterval
{
    public function __construct(string $duration)
    {
    }
    /**
     * @return DateInterval|false
     * @alias date_interval_create_from_date_string
     */
    #[\Until('8.1')]
    public static function createFromDateString(string $datetime)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_interval_create_from_date_string
     */
    #[\Since('8.1')]
    public static function createFromDateString(string $datetime) : DateInterval|false
    {
    }
    /**
     * @return string
     * @alias date_interval_format
     */
    #[\Until('8.1')]
    public function format(string $format)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_interval_format
     */
    #[\Since('8.1')]
    public function format(string $format) : string
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
    /** @return DateInterval */
    #[\Until('8.1')]
    public static function __set_state(array $array)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function __set_state(array $array) : DateInterval
    {
    }
}