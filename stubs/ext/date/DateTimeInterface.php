<?php 

// NB: Adding return types to methods is a BC break!
// For now only using @return annotations here.
interface DateTimeInterface
{
    /**
     * @tentative-return-type
     * @return string
     */
    public function format(string $format);
    /**
     * @tentative-return-type
     * @return (DateTimeZone | false)
     */
    public function getTimezone();
    /**
     * @tentative-return-type
     * @return int
     */
    public function getOffset();
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function getTimestamp();
    /**
     * @tentative-return-type
     * @return (DateInterval | false)
     */
    public function diff(DateTimeInterface $targetObject, bool $absolute = false);
    /**
     * @tentative-return-type
     * @return void
     */
    public function __wakeup();
    #[\Since('8.2')]
    public function __serialize(): array;
    #[\Since('8.2')]
    public function __unserialize(array $data): void;
    /** @var string */
    #[\Since('8.2')]
    public const ATOM = DATE_ATOM;
    /** @var string */
    #[\Since('8.2')]
    public const COOKIE = DATE_COOKIE;
    /** @var string */
    #[\Since('8.2')]
    public const ISO8601 = DATE_ISO8601;
    /** @var string */
    #[\Since('8.2')]
    public const ISO8601_EXPANDED = DATE_ISO8601_EXPANDED;
    /** @var string */
    #[\Since('8.2')]
    public const RFC822 = DATE_RFC822;
    /** @var string */
    #[\Since('8.2')]
    public const RFC850 = DATE_RFC850;
    /** @var string */
    #[\Since('8.2')]
    public const RFC1036 = DATE_RFC1036;
    /** @var string */
    #[\Since('8.2')]
    public const RFC1123 = DATE_RFC1123;
    /** @var string */
    #[\Since('8.2')]
    public const RFC7231 = DATE_RFC7231;
    /** @var string */
    #[\Since('8.2')]
    public const RFC2822 = DATE_RFC2822;
    /** @var string */
    #[\Since('8.2')]
    public const RFC3339 = DATE_RFC3339;
    /** @var string */
    #[\Since('8.2')]
    public const RFC3339_EXTENDED = DATE_RFC3339_EXTENDED;
    /** @var string */
    #[\Since('8.2')]
    public const RSS = DATE_RSS;
    /** @var string */
    #[\Since('8.2')]
    public const W3C = DATE_W3C;
}