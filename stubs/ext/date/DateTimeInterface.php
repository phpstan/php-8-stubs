<?php 

interface DateTimeInterface
{
    /** @return string */
    #[\Until('8.1')]
    public function format(string $format);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function format(string $format) : string;
    /** @return DateTimeZone|false */
    #[\Until('8.1')]
    public function getTimezone();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getTimezone() : DateTimeZone|false;
    /** @return int */
    #[\Until('8.1')]
    public function getOffset();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getOffset() : int;
    /** @return int|false */
    #[\Until('8.1')]
    public function getTimestamp();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getTimestamp() : int;
    /** @return DateInterval|false */
    #[\Until('8.1')]
    public function diff(DateTimeInterface $targetObject, bool $absolute = false);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function diff(DateTimeInterface $targetObject, bool $absolute = false) : DateInterval;
    /** @return void */
    #[\Until('8.1')]
    public function __wakeup();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __wakeup() : void;
}