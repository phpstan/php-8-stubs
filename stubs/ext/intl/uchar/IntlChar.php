<?php 

/** @generate-class-entries */
class IntlChar
{
    /** @return bool|null */
    #[\Until('8.1')]
    public static function hasBinaryProperty(int|string $codepoint, int $property)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function hasBinaryProperty(int|string $codepoint, int $property) : ?bool
    {
    }
    /** @return array|null */
    #[\Until('8.1')]
    public static function charAge(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charAge(int|string $codepoint) : ?array
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public static function charDigitValue(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charDigitValue(int|string $codepoint) : ?int
    {
    }
    /** @return int|null
     */
    #[\Until('8.1')]
    public static function charDirection(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charDirection(int|string $codepoint) : ?int
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public static function charFromName(string $name, int $type = IntlChar::UNICODE_CHAR_NAME)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charFromName(string $name, int $type = IntlChar::UNICODE_CHAR_NAME) : ?int
    {
    }
    /** @return int|string|null */
    #[\Until('8.1')]
    public static function charMirror(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charMirror(int|string $codepoint) : int|string|null
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public static function charName(int|string $codepoint, int $type = IntlChar::UNICODE_CHAR_NAME)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charName(int|string $codepoint, int $type = IntlChar::UNICODE_CHAR_NAME) : ?string
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public static function charType(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function charType(int|string $codepoint) : ?int
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public static function chr(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function chr(int|string $codepoint) : ?string
    {
    }
    /** @return int|false|null */
    #[\Until('8.1')]
    public static function digit(int|string $codepoint, int $base = 10)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function digit(int|string $codepoint, int $base = 10) : int|false|null
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function enumCharNames(int|string $start, int|string $end, callable $callback, int $type = IntlChar::UNICODE_CHAR_NAME)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function enumCharNames(int|string $start, int|string $end, callable $callback, int $type = IntlChar::UNICODE_CHAR_NAME) : ?bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public static function enumCharTypes(callable $callback)
    {
    }
    // TODO return values just don't make sense
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function enumCharTypes(callable $callback) : void
    {
    }
    /**
     * @return int|string|null
     */
    #[\Until('8.1')]
    public static function foldCase(int|string $codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function foldCase(int|string $codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT) : int|string|null
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public static function forDigit(int $digit, int $base = 10)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function forDigit(int $digit, int $base = 10) : int
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 52
    /** @return int|string|null */
    #[\Until('8.1')]
    public static function getBidiPairedBracket(int|string $codepoint)
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 52
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getBidiPairedBracket(int|string $codepoint) : int|string|null
    {
    }
    #endif
    /** @return int|null */
    #[\Until('8.1')]
    public static function getBlockCode(int|string $codepoint)
    {
    }
    #endif
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getBlockCode(int|string $codepoint) : ?int
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public static function getCombiningClass(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getCombiningClass(int|string $codepoint) : ?int
    {
    }
    /** @return string|false|null */
    #[\Until('8.1')]
    public static function getFC_NFKC_Closure(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getFC_NFKC_Closure(int|string $codepoint) : string|false|null
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public static function getIntPropertyMaxValue(int $property)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getIntPropertyMaxValue(int $property) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public static function getIntPropertyMinValue(int $property)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getIntPropertyMinValue(int $property) : int
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public static function getIntPropertyValue(int|string $codepoint, int $property)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getIntPropertyValue(int|string $codepoint, int $property) : ?int
    {
    }
    /** @return float|null */
    #[\Until('8.1')]
    public static function getNumericValue(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getNumericValue(int|string $codepoint) : ?float
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public static function getPropertyEnum(string $alias)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getPropertyEnum(string $alias) : int
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public static function getPropertyName(int $property, int $type = IntlChar::LONG_PROPERTY_NAME)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getPropertyName(int $property, int $type = IntlChar::LONG_PROPERTY_NAME) : string|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public static function getPropertyValueEnum(int $property, string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getPropertyValueEnum(int $property, string $name) : int
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public static function getPropertyValueName(int $property, int $value, int $type = IntlChar::LONG_PROPERTY_NAME)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getPropertyValueName(int $property, int $value, int $type = IntlChar::LONG_PROPERTY_NAME) : string|false
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public static function getUnicodeVersion()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getUnicodeVersion() : array
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isalnum(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isalnum(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isalpha(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isalpha(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isbase(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isbase(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isblank(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isblank(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function iscntrl(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function iscntrl(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isdefined(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isdefined(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isdigit(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isdigit(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isgraph(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isgraph(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isIDIgnorable(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isIDIgnorable(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isIDPart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isIDPart(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isIDStart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isIDStart(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isISOControl(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isISOControl(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isJavaIDPart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isJavaIDPart(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isJavaIDStart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isJavaIDStart(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isJavaSpaceChar(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isJavaSpaceChar(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function islower(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function islower(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isMirrored(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isMirrored(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isprint(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isprint(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function ispunct(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function ispunct(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isspace(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isspace(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function istitle(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function istitle(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isUAlphabetic(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isUAlphabetic(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isULowercase(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isULowercase(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isupper(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isupper(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isUUppercase(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isUUppercase(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isUWhiteSpace(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isUWhiteSpace(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isWhitespace(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isWhitespace(int|string $codepoint) : ?bool
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public static function isxdigit(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function isxdigit(int|string $codepoint) : ?bool
    {
    }
    /** @return int|null */
    #[\Until('8.1')]
    public static function ord(int|string $character)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function ord(int|string $character) : ?int
    {
    }
    /** @return int|string|null */
    #[\Until('8.1')]
    public static function tolower(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function tolower(int|string $codepoint) : int|string|null
    {
    }
    /** @return int|string|null */
    #[\Until('8.1')]
    public static function totitle(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function totitle(int|string $codepoint) : int|string|null
    {
    }
    /** @return int|string|null */
    #[\Until('8.1')]
    public static function toupper(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function toupper(int|string $codepoint) : int|string|null
    {
    }
}