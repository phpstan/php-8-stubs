<?php 

/** @generate-function-entries */
class NumberFormatter
{
    public function __construct(string $locale, int $style, ?string $pattern = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_create
     * @return (NumberFormatter | null)
     */
    public static function create(string $locale, int $style, ?string $pattern = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_format
     * @return (string | false)
     */
    public function format(int|float $num, int $type = NumberFormatter::TYPE_DEFAULT)
    {
    }
    /**
     * @param int $offset
     * @tentative-return-type
     * @alias numfmt_parse
     * @return (int | float | false)
     */
    public function parse(string $string, int $type = NumberFormatter::TYPE_DOUBLE, &$offset = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_format_currency
     * @return (string | false)
     */
    public function formatCurrency(float $amount, string $currency)
    {
    }
    /**
     * @param string $currency
     * @param int $offset
     * @tentative-return-type
     * @alias numfmt_parse_currency
     * @return (float | false)
     */
    public function parseCurrency(string $string, &$currency, &$offset = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_attribute
     * @return bool
     */
    public function setAttribute(int $attribute, int|float $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_attribute
     * @return (int | float | false)
     */
    public function getAttribute(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_text_attribute
     * @return bool
     */
    public function setTextAttribute(int $attribute, string $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_text_attribute
     * @return (string | false)
     */
    public function getTextAttribute(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_symbol
     * @return bool
     */
    public function setSymbol(int $symbol, string $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_symbol
     * @return (string | false)
     */
    public function getSymbol(int $symbol)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_set_pattern
     * @return bool
     */
    public function setPattern(string $pattern)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_pattern
     * @return (string | false)
     */
    public function getPattern()
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_locale
     * @return (string | false)
     */
    public function getLocale(int $type = ULOC_ACTUAL_LOCALE)
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_error_code
     * @return int
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias numfmt_get_error_message
     * @return string
     */
    public function getErrorMessage()
    {
    }
    /* UNumberFormatStyle constants */
    /**
     * @var int
     * @cvalue UNUM_PATTERN_DECIMAL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PATTERN_DECIMAL = UNKNOWN;
    /* UNumberFormatStyle constants */
    /**
     * @var int
     * @cvalue UNUM_PATTERN_DECIMAL
     */
    #[\Since('8.3')]
    public const PATTERN_DECIMAL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DECIMAL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DECIMAL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DECIMAL
     */
    #[\Since('8.3')]
    public const DECIMAL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_CURRENCY
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const CURRENCY = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_CURRENCY
     */
    #[\Since('8.3')]
    public const CURRENCY = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PERCENT
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PERCENT = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PERCENT
     */
    #[\Since('8.3')]
    public const PERCENT = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SCIENTIFIC
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const SCIENTIFIC = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SCIENTIFIC
     */
    #[\Since('8.3')]
    public const SCIENTIFIC = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SPELLOUT
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const SPELLOUT = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SPELLOUT
     */
    #[\Since('8.3')]
    public const SPELLOUT = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ORDINAL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ORDINAL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ORDINAL
     */
    #[\Since('8.3')]
    public const ORDINAL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DURATION
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DURATION = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DURATION
     */
    #[\Since('8.3')]
    public const DURATION = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PATTERN_RULEBASED
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PATTERN_RULEBASED = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PATTERN_RULEBASED
     */
    #[\Since('8.3')]
    public const PATTERN_RULEBASED = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_IGNORE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const IGNORE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_IGNORE
     */
    #[\Since('8.3')]
    public const IGNORE = UNKNOWN;
    #if U_ICU_VERSION_MAJOR_NUM >= 53
    /**
     * @var int
     * @cvalue UNUM_CURRENCY_ACCOUNTING
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const CURRENCY_ACCOUNTING = UNKNOWN;
    #if U_ICU_VERSION_MAJOR_NUM >= 53
    /**
     * @var int
     * @cvalue UNUM_CURRENCY_ACCOUNTING
     */
    #[\Since('8.3')]
    public const CURRENCY_ACCOUNTING = UNKNOWN;
    #endif
    /**
     * @var int
     * @cvalue UNUM_DEFAULT
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DEFAULT_STYLE = UNKNOWN;
    #endif
    /**
     * @var int
     * @cvalue UNUM_DEFAULT
     */
    #[\Since('8.3')]
    public const DEFAULT_STYLE = UNKNOWN;
    /* UNumberFormatRoundingMode */
    /**
     * @var int
     * @cvalue UNUM_ROUND_CEILING
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_CEILING = UNKNOWN;
    /* UNumberFormatRoundingMode */
    /**
     * @var int
     * @cvalue UNUM_ROUND_CEILING
     */
    #[\Since('8.3')]
    public const ROUND_CEILING = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_FLOOR
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_FLOOR = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_FLOOR
     */
    #[\Since('8.3')]
    public const ROUND_FLOOR = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_DOWN
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_DOWN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_DOWN
     */
    #[\Since('8.3')]
    public const ROUND_DOWN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_UP
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_UP = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_UP
     */
    #[\Since('8.3')]
    public const ROUND_UP = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_HALFEVEN
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_HALFEVEN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_HALFEVEN
     */
    #[\Since('8.3')]
    public const ROUND_HALFEVEN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_HALFDOWN
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_HALFDOWN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_HALFDOWN
     */
    #[\Since('8.3')]
    public const ROUND_HALFDOWN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_HALFUP
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUND_HALFUP = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUND_HALFUP
     */
    #[\Since('8.3')]
    public const ROUND_HALFUP = UNKNOWN;
    /* UNumberFormatPadPosition */
    /**
     * @var int
     * @cvalue UNUM_PAD_BEFORE_PREFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PAD_BEFORE_PREFIX = UNKNOWN;
    /* UNumberFormatPadPosition */
    /**
     * @var int
     * @cvalue UNUM_PAD_BEFORE_PREFIX
     */
    #[\Since('8.3')]
    public const PAD_BEFORE_PREFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_AFTER_PREFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PAD_AFTER_PREFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_AFTER_PREFIX
     */
    #[\Since('8.3')]
    public const PAD_AFTER_PREFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_BEFORE_SUFFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PAD_BEFORE_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_BEFORE_SUFFIX
     */
    #[\Since('8.3')]
    public const PAD_BEFORE_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_AFTER_SUFFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PAD_AFTER_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_AFTER_SUFFIX
     */
    #[\Since('8.3')]
    public const PAD_AFTER_SUFFIX = UNKNOWN;
    /* UNumberFormatAttribute */
    /**
     * @var int
     * @cvalue UNUM_PARSE_INT_ONLY
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PARSE_INT_ONLY = UNKNOWN;
    /* UNumberFormatAttribute */
    /**
     * @var int
     * @cvalue UNUM_PARSE_INT_ONLY
     */
    #[\Since('8.3')]
    public const PARSE_INT_ONLY = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_GROUPING_USED
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const GROUPING_USED = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_GROUPING_USED
     */
    #[\Since('8.3')]
    public const GROUPING_USED = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DECIMAL_ALWAYS_SHOWN
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DECIMAL_ALWAYS_SHOWN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DECIMAL_ALWAYS_SHOWN
     */
    #[\Since('8.3')]
    public const DECIMAL_ALWAYS_SHOWN = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MAX_INTEGER_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MAX_INTEGER_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MAX_INTEGER_DIGITS
     */
    #[\Since('8.3')]
    public const MAX_INTEGER_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MIN_INTEGER_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MIN_INTEGER_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MIN_INTEGER_DIGITS
     */
    #[\Since('8.3')]
    public const MIN_INTEGER_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_INTEGER_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const INTEGER_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_INTEGER_DIGITS
     */
    #[\Since('8.3')]
    public const INTEGER_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MAX_FRACTION_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MAX_FRACTION_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MAX_FRACTION_DIGITS
     */
    #[\Since('8.3')]
    public const MAX_FRACTION_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MIN_FRACTION_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MIN_FRACTION_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MIN_FRACTION_DIGITS
     */
    #[\Since('8.3')]
    public const MIN_FRACTION_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_FRACTION_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const FRACTION_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_FRACTION_DIGITS
     */
    #[\Since('8.3')]
    public const FRACTION_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MULTIPLIER
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MULTIPLIER = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MULTIPLIER
     */
    #[\Since('8.3')]
    public const MULTIPLIER = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_GROUPING_SIZE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const GROUPING_SIZE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_GROUPING_SIZE
     */
    #[\Since('8.3')]
    public const GROUPING_SIZE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUNDING_MODE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUNDING_MODE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUNDING_MODE
     */
    #[\Since('8.3')]
    public const ROUNDING_MODE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUNDING_INCREMENT
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ROUNDING_INCREMENT = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ROUNDING_INCREMENT
     */
    #[\Since('8.3')]
    public const ROUNDING_INCREMENT = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_FORMAT_WIDTH
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const FORMAT_WIDTH = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_FORMAT_WIDTH
     */
    #[\Since('8.3')]
    public const FORMAT_WIDTH = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PADDING_POSITION
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PADDING_POSITION = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PADDING_POSITION
     */
    #[\Since('8.3')]
    public const PADDING_POSITION = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SECONDARY_GROUPING_SIZE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const SECONDARY_GROUPING_SIZE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SECONDARY_GROUPING_SIZE
     */
    #[\Since('8.3')]
    public const SECONDARY_GROUPING_SIZE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SIGNIFICANT_DIGITS_USED
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const SIGNIFICANT_DIGITS_USED = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SIGNIFICANT_DIGITS_USED
     */
    #[\Since('8.3')]
    public const SIGNIFICANT_DIGITS_USED = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MIN_SIGNIFICANT_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MIN_SIGNIFICANT_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MIN_SIGNIFICANT_DIGITS
     */
    #[\Since('8.3')]
    public const MIN_SIGNIFICANT_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MAX_SIGNIFICANT_DIGITS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MAX_SIGNIFICANT_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MAX_SIGNIFICANT_DIGITS
     */
    #[\Since('8.3')]
    public const MAX_SIGNIFICANT_DIGITS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_LENIENT_PARSE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const LENIENT_PARSE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_LENIENT_PARSE
     */
    #[\Since('8.3')]
    public const LENIENT_PARSE = UNKNOWN;
    /* UNumberFormatTextAttribute */
    /**
     * @var int
     * @cvalue UNUM_POSITIVE_PREFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const POSITIVE_PREFIX = UNKNOWN;
    /* UNumberFormatTextAttribute */
    /**
     * @var int
     * @cvalue UNUM_POSITIVE_PREFIX
     */
    #[\Since('8.3')]
    public const POSITIVE_PREFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_POSITIVE_SUFFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const POSITIVE_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_POSITIVE_SUFFIX
     */
    #[\Since('8.3')]
    public const POSITIVE_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_NEGATIVE_PREFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const NEGATIVE_PREFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_NEGATIVE_PREFIX
     */
    #[\Since('8.3')]
    public const NEGATIVE_PREFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_NEGATIVE_SUFFIX
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const NEGATIVE_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_NEGATIVE_SUFFIX
     */
    #[\Since('8.3')]
    public const NEGATIVE_SUFFIX = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PADDING_CHARACTER
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PADDING_CHARACTER = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PADDING_CHARACTER
     */
    #[\Since('8.3')]
    public const PADDING_CHARACTER = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_CURRENCY_CODE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const CURRENCY_CODE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_CURRENCY_CODE
     */
    #[\Since('8.3')]
    public const CURRENCY_CODE = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DEFAULT_RULESET
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DEFAULT_RULESET = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DEFAULT_RULESET
     */
    #[\Since('8.3')]
    public const DEFAULT_RULESET = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PUBLIC_RULESETS
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PUBLIC_RULESETS = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PUBLIC_RULESETS
     */
    #[\Since('8.3')]
    public const PUBLIC_RULESETS = UNKNOWN;
    /* UNumberFormatSymbol */
    /**
     * @var int
     * @cvalue UNUM_DECIMAL_SEPARATOR_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DECIMAL_SEPARATOR_SYMBOL = UNKNOWN;
    /* UNumberFormatSymbol */
    /**
     * @var int
     * @cvalue UNUM_DECIMAL_SEPARATOR_SYMBOL
     */
    #[\Since('8.3')]
    public const DECIMAL_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_GROUPING_SEPARATOR_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const GROUPING_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_GROUPING_SEPARATOR_SYMBOL
     */
    #[\Since('8.3')]
    public const GROUPING_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PATTERN_SEPARATOR_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PATTERN_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PATTERN_SEPARATOR_SYMBOL
     */
    #[\Since('8.3')]
    public const PATTERN_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PERCENT_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PERCENT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PERCENT_SYMBOL
     */
    #[\Since('8.3')]
    public const PERCENT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ZERO_DIGIT_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const ZERO_DIGIT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_ZERO_DIGIT_SYMBOL
     */
    #[\Since('8.3')]
    public const ZERO_DIGIT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DIGIT_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const DIGIT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_DIGIT_SYMBOL
     */
    #[\Since('8.3')]
    public const DIGIT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MINUS_SIGN_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MINUS_SIGN_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MINUS_SIGN_SYMBOL
     */
    #[\Since('8.3')]
    public const MINUS_SIGN_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PLUS_SIGN_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PLUS_SIGN_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PLUS_SIGN_SYMBOL
     */
    #[\Since('8.3')]
    public const PLUS_SIGN_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_CURRENCY_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const CURRENCY_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_CURRENCY_SYMBOL
     */
    #[\Since('8.3')]
    public const CURRENCY_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_INTL_CURRENCY_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const INTL_CURRENCY_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_INTL_CURRENCY_SYMBOL
     */
    #[\Since('8.3')]
    public const INTL_CURRENCY_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MONETARY_SEPARATOR_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MONETARY_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MONETARY_SEPARATOR_SYMBOL
     */
    #[\Since('8.3')]
    public const MONETARY_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_EXPONENTIAL_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const EXPONENTIAL_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_EXPONENTIAL_SYMBOL
     */
    #[\Since('8.3')]
    public const EXPONENTIAL_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PERMILL_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PERMILL_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PERMILL_SYMBOL
     */
    #[\Since('8.3')]
    public const PERMILL_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_ESCAPE_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const PAD_ESCAPE_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_PAD_ESCAPE_SYMBOL
     */
    #[\Since('8.3')]
    public const PAD_ESCAPE_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_INFINITY_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const INFINITY_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_INFINITY_SYMBOL
     */
    #[\Since('8.3')]
    public const INFINITY_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_NAN_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const NAN_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_NAN_SYMBOL
     */
    #[\Since('8.3')]
    public const NAN_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SIGNIFICANT_DIGIT_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const SIGNIFICANT_DIGIT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_SIGNIFICANT_DIGIT_SYMBOL
     */
    #[\Since('8.3')]
    public const SIGNIFICANT_DIGIT_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MONETARY_GROUPING_SEPARATOR_SYMBOL
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const MONETARY_GROUPING_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue UNUM_MONETARY_GROUPING_SEPARATOR_SYMBOL
     */
    #[\Since('8.3')]
    public const MONETARY_GROUPING_SEPARATOR_SYMBOL = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_DEFAULT
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const TYPE_DEFAULT = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_DEFAULT
     */
    #[\Since('8.3')]
    public const TYPE_DEFAULT = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_INT32
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const TYPE_INT32 = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_INT32
     */
    #[\Since('8.3')]
    public const TYPE_INT32 = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_INT64
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const TYPE_INT64 = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_INT64
     */
    #[\Since('8.3')]
    public const TYPE_INT64 = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_DOUBLE
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const TYPE_DOUBLE = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_DOUBLE
     */
    #[\Since('8.3')]
    public const TYPE_DOUBLE = UNKNOWN;
    /**
     * @var int
     * @cvalue FORMAT_TYPE_CURRENCY
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const TYPE_CURRENCY = UNKNOWN;
    /**
     * @var int
     * @deprecated
     * @cvalue FORMAT_TYPE_CURRENCY
     */
    #[\Since('8.3')]
    public const TYPE_CURRENCY = UNKNOWN;
}