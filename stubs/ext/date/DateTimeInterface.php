<?php 

interface DateTimeInterface
{
    /** @tentative-return-type */
    public function format(string $format);
    /** @tentative-return-type */
    public function getTimezone();
    /** @tentative-return-type */
    public function getOffset();
    /** @tentative-return-type */
    public function getTimestamp();
    /** @tentative-return-type */
    public function diff(DateTimeInterface $targetObject, bool $absolute = false);
    /** @tentative-return-type */
    public function __wakeup();
}