<?php 

/** @generate-class-entries */
/** @not-serializable */
class NumberFormatter
{
    public function __construct(string $locale, int $style, ?string $pattern = null)
    {
    }
    /**
     * @return NumberFormatter|null
     * @alias numfmt_create
     */
    #[\Until('8.1')]
    public static function create(string $locale, int $style, ?string $pattern = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_create
     */
    #[\Since('8.1')]
    public static function create(string $locale, int $style, ?string $pattern = null) : ?NumberFormatter
    {
    }
    /**
     * @return string|false
     * @alias numfmt_format
     */
    #[\Until('8.1')]
    public function format(int|float $num, int $type = NumberFormatter::TYPE_DEFAULT)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_format
     */
    #[\Since('8.1')]
    public function format(int|float $num, int $type = NumberFormatter::TYPE_DEFAULT) : string|false
    {
    }
    /**
     * @param int $offset
     * @return int|float|false
     * @alias numfmt_parse
     */
    #[\Until('8.1')]
    public function parse(string $string, int $type = NumberFormatter::TYPE_DOUBLE, &$offset = null)
    {
    }
    /**
     * @param int $offset
     * @tentative-return-type
     * @alias numfmt_parse
     */
    #[\Since('8.1')]
    public function parse(string $string, int $type = NumberFormatter::TYPE_DOUBLE, &$offset = null) : int|float|false
    {
    }
    /**
     * @return string|false
     * @alias numfmt_format_currency
     */
    #[\Until('8.1')]
    public function formatCurrency(float $amount, string $currency)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_format_currency
     */
    #[\Since('8.1')]
    public function formatCurrency(float $amount, string $currency) : string|false
    {
    }
    /**
     * @param string $currency
     * @param int $offset
     * @return float|false
     * @alias numfmt_parse_currency
     */
    #[\Until('8.1')]
    public function parseCurrency(string $string, &$currency, &$offset = null)
    {
    }
    /**
     * @param string $currency
     * @param int $offset
     * @tentative-return-type
     * @alias numfmt_parse_currency
     */
    #[\Since('8.1')]
    public function parseCurrency(string $string, &$currency, &$offset = null) : float|false
    {
    }
    /**
     * @return bool
     * @alias numfmt_set_attribute
     */
    #[\Until('8.1')]
    public function setAttribute(int $attribute, int|float $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_attribute
     */
    #[\Since('8.1')]
    public function setAttribute(int $attribute, int|float $value) : bool
    {
    }
    /**
     * @return int|float|false
     * @alias numfmt_get_attribute
     */
    #[\Until('8.1')]
    public function getAttribute(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_attribute
     */
    #[\Since('8.1')]
    public function getAttribute(int $attribute) : int|float|false
    {
    }
    /**
     * @return bool
     * @alias numfmt_set_text_attribute
     */
    #[\Until('8.1')]
    public function setTextAttribute(int $attribute, string $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_text_attribute
     */
    #[\Since('8.1')]
    public function setTextAttribute(int $attribute, string $value) : bool
    {
    }
    /**
     * @return string|false
     * @alias numfmt_get_text_attribute
     */
    #[\Until('8.1')]
    public function getTextAttribute(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_text_attribute
     */
    #[\Since('8.1')]
    public function getTextAttribute(int $attribute) : string|false
    {
    }
    /**
     * @return bool
     * @alias numfmt_set_symbol
     */
    #[\Until('8.1')]
    public function setSymbol(int $symbol, string $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_symbol
     */
    #[\Since('8.1')]
    public function setSymbol(int $symbol, string $value) : bool
    {
    }
    /**
     * @return string|false
     * @alias numfmt_get_symbol
     */
    #[\Until('8.1')]
    public function getSymbol(int $symbol)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_symbol
     */
    #[\Since('8.1')]
    public function getSymbol(int $symbol) : string|false
    {
    }
    /**
     * @return bool
     * @alias numfmt_set_pattern
     */
    #[\Until('8.1')]
    public function setPattern(string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_pattern
     */
    #[\Since('8.1')]
    public function setPattern(string $pattern) : bool
    {
    }
    /**
     * @return string|false
     * @alias numfmt_get_pattern
     */
    #[\Until('8.1')]
    public function getPattern()
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_pattern
     */
    #[\Since('8.1')]
    public function getPattern() : string|false
    {
    }
    /**
     * @return string|false
     * @alias numfmt_get_locale
     */
    #[\Until('8.1')]
    public function getLocale(int $type = ULOC_ACTUAL_LOCALE)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_locale
     */
    #[\Since('8.1')]
    public function getLocale(int $type = ULOC_ACTUAL_LOCALE) : string|false
    {
    }
    /**
     * @return int
     * @alias numfmt_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int
    {
    }
    /**
     * @return string
     * @alias numfmt_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string
    {
    }
}