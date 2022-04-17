<?php 

/** @generate-class-entries */
class IntlChar
{
    /** @tentative-return-type */
    public static function hasBinaryProperty(int|string $codepoint, int $property)
    {
    }
    /** @tentative-return-type */
    public static function charAge(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function charDigitValue(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function charDirection(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function charFromName(string $name, int $type = IntlChar::UNICODE_CHAR_NAME)
    {
    }
    /** @tentative-return-type */
    public static function charMirror(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function charName(int|string $codepoint, int $type = IntlChar::UNICODE_CHAR_NAME)
    {
    }
    /** @tentative-return-type */
    public static function charType(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function chr(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function digit(int|string $codepoint, int $base = 10)
    {
    }
    /** @tentative-return-type */
    public static function enumCharNames(int|string $start, int|string $end, callable $callback, int $type = IntlChar::UNICODE_CHAR_NAME)
    {
    }
    // TODO return values just don't make sense
    /** @tentative-return-type */
    public static function enumCharTypes(callable $callback)
    {
    }
    /** @tentative-return-type */
    public static function foldCase(int|string $codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT)
    {
    }
    /** @tentative-return-type */
    public static function forDigit(int $digit, int $base = 10)
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 52
    /** @tentative-return-type */
    public static function getBidiPairedBracket(int|string $codepoint)
    {
    }
    #endif
    /** @tentative-return-type */
    public static function getBlockCode(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function getCombiningClass(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function getFC_NFKC_Closure(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function getIntPropertyMaxValue(int $property)
    {
    }
    /** @tentative-return-type */
    public static function getIntPropertyMinValue(int $property)
    {
    }
    /** @tentative-return-type */
    public static function getIntPropertyValue(int|string $codepoint, int $property)
    {
    }
    /** @tentative-return-type */
    public static function getNumericValue(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function getPropertyEnum(string $alias)
    {
    }
    /** @tentative-return-type */
    public static function getPropertyName(int $property, int $type = IntlChar::LONG_PROPERTY_NAME)
    {
    }
    /** @tentative-return-type */
    public static function getPropertyValueEnum(int $property, string $name)
    {
    }
    /** @tentative-return-type */
    public static function getPropertyValueName(int $property, int $value, int $type = IntlChar::LONG_PROPERTY_NAME)
    {
    }
    /** @tentative-return-type */
    public static function getUnicodeVersion()
    {
    }
    /** @tentative-return-type */
    public static function isalnum(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isalpha(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isbase(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isblank(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function iscntrl(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isdefined(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isdigit(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isgraph(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isIDIgnorable(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isIDPart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isIDStart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isISOControl(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isJavaIDPart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isJavaIDStart(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isJavaSpaceChar(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function islower(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isMirrored(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isprint(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function ispunct(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isspace(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function istitle(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isUAlphabetic(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isULowercase(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isupper(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isUUppercase(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isUWhiteSpace(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isWhitespace(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function isxdigit(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function ord(int|string $character)
    {
    }
    /** @tentative-return-type */
    public static function tolower(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function totitle(int|string $codepoint)
    {
    }
    /** @tentative-return-type */
    public static function toupper(int|string $codepoint)
    {
    }
}