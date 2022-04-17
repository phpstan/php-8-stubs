<?php 

/** @generate-class-entries */
class MessageFormatter
{
    public function __construct(string $locale, string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_create
     */
    public static function create(string $locale, string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_format
     */
    public function format(array $values)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_format_message
     */
    public static function formatMessage(string $locale, string $pattern, array $values)
    {
    }
    /**
     * @return array<int, int|float|string>|false
     * @tentative-return-type
     * @alias msgfmt_parse
     */
    public function parse(string $string)
    {
    }
    /**
     * @return array<int, int|float|string>|false
     * @tentative-return-type
     * @alias msgfmt_parse_message
     */
    public static function parseMessage(string $locale, string $pattern, string $message)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_set_pattern
     */
    public function setPattern(string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_pattern
     */
    public function getPattern()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_locale
     */
    public function getLocale()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_error_code
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias msgfmt_get_error_message
     */
    public function getErrorMessage()
    {
    }
}