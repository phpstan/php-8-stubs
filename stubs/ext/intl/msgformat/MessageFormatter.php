<?php 

/** @generate-class-entries */
class MessageFormatter
{
    public function __construct(string $locale, string $pattern)
    {
    }
    /**
     * @return MessageFormatter|null
     * @alias msgfmt_create
     */
    #[\Until('8.1')]
    public static function create(string $locale, string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_create
     */
    #[\Since('8.1')]
    public static function create(string $locale, string $pattern) : ?MessageFormatter
    {
    }
    /**
     * @return string|false
     * @alias msgfmt_format
     */
    #[\Until('8.1')]
    public function format(array $values)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_format
     */
    #[\Since('8.1')]
    public function format(array $values) : string|false
    {
    }
    /**
     * @return string|false
     * @alias msgfmt_format_message
     */
    #[\Until('8.1')]
    public static function formatMessage(string $locale, string $pattern, array $values)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_format_message
     */
    #[\Since('8.1')]
    public static function formatMessage(string $locale, string $pattern, array $values) : string|false
    {
    }
    /**
     * @return array|false
     * @alias msgfmt_parse
     */
    #[\Until('8.1')]
    public function parse(string $string)
    {
    }
    /**
     * @return array<int, int|float|string>|false
     * @tentative-return-type
     * @alias msgfmt_parse
     */
    #[\Since('8.1')]
    public function parse(string $string) : array|false
    {
    }
    /**
     * @return array|false
     * @alias msgfmt_parse_message
     */
    #[\Until('8.1')]
    public static function parseMessage(string $locale, string $pattern, string $message)
    {
    }
    /**
     * @return array<int, int|float|string>|false
     * @tentative-return-type
     * @alias msgfmt_parse_message
     */
    #[\Since('8.1')]
    public static function parseMessage(string $locale, string $pattern, string $message) : array|false
    {
    }
    /**
     * @return bool
     * @alias msgfmt_set_pattern
     */
    #[\Until('8.1')]
    public function setPattern(string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_set_pattern
     */
    #[\Since('8.1')]
    public function setPattern(string $pattern) : bool
    {
    }
    /**
     * @return string|false
     * @alias msgfmt_get_pattern
     */
    #[\Until('8.1')]
    public function getPattern()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_pattern
     */
    #[\Since('8.1')]
    public function getPattern() : string|false
    {
    }
    /**
     * @return string
     * @alias msgfmt_get_locale
     */
    #[\Until('8.1')]
    public function getLocale()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_locale
     */
    #[\Since('8.1')]
    public function getLocale() : string
    {
    }
    /**
     * @return int
     * @alias msgfmt_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int
    {
    }
    /**
     * @return string
     * @alias msgfmt_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string
    {
    }
}