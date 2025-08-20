<?php 

class DateInterval
{
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function __serialize(): array;
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function __unserialize(array $data): void;
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function __serialize(): array;
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function __unserialize(array $data): void;
    public function __construct(string $duration)
    {
    }
    /**
     * @tentative-return-type
     * @return (DateInterval | false)
     */
    public static function createFromDateString(string $datetime)
    {
    }
    /**
     * @tentative-return-type
     * @alias date_interval_format
     * @return string
     */
    public function format(string $format)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __serialize(): array;
    #[\Since('8.5')]
    public function __serialize(): array;
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function __unserialize(array $data): void;
    #[\Since('8.5')]
    public function __unserialize(array $data): void;
    /**
     * @tentative-return-type
     * @return void
     */
    public function __wakeup()
    {
    }
    /**
     * @tentative-return-type
     * @return DateInterval
     */
    public static function __set_state(array $array)
    {
    }
}