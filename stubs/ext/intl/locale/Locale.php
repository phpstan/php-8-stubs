<?php 

/** @generate-function-entries */
class Locale
{
    /**
     * @tentative-return-type
     * @alias locale_get_default
     * @return string
     */
    public static function getDefault()
    {
    }
    /**
     * @return bool
     * @alias locale_set_default
     */
    public static function setDefault(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_primary_language
     * @return (string | null)
     */
    public static function getPrimaryLanguage(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_script
     * @return (string | null)
     */
    public static function getScript(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_region
     * @return (string | null)
     */
    public static function getRegion(string $locale)
    {
    }
    /**
     * @return array|false|null
     * @alias locale_get_keywords
     */
    public static function getKeywords(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_script
     * @return (string | false)
     */
    public static function getDisplayScript(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_region
     * @return (string | false)
     */
    public static function getDisplayRegion(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_name
     * @return (string | false)
     */
    public static function getDisplayName(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_language
     * @return (string | false)
     */
    public static function getDisplayLanguage(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_variant
     * @return (string | false)
     */
    public static function getDisplayVariant(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_compose
     * @return (string | false)
     */
    public static function composeLocale(array $subtags)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_parse
     * @return (array | null)
     */
    public static function parseLocale(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_all_variants
     * @return (array | null)
     */
    public static function getAllVariants(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_filter_matches
     * @return (bool | null)
     */
    public static function filterMatches(string $languageTag, string $locale, bool $canonicalize = false)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_lookup
     * @return (string | null)
     */
    public static function lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_canonicalize
     * @return (string | null)
     */
    public static function canonicalize(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_accept_from_http
     * @return (string | false)
     */
    public static function acceptFromHttp(string $header)
    {
    }
    /**
     * @var int
     * @cvalue ULOC_ACTUAL_LOCALE
     */
    #[\Since('8.2')]
    public const ACTUAL_LOCALE = UNKNOWN;
    /**
     * @var int
     * @cvalue ULOC_VALID_LOCALE
     */
    #[\Since('8.2')]
    public const VALID_LOCALE = UNKNOWN;
    /** @var null */
    #[\Since('8.2')]
    public const DEFAULT_LOCALE = null;
    /**
     * @var string
     * @cvalue LOC_LANG_TAG
     */
    #[\Since('8.2')]
    public const LANG_TAG = UNKNOWN;
    /**
     * @var string
     * @cvalue LOC_EXTLANG_TAG
     */
    #[\Since('8.2')]
    public const EXTLANG_TAG = UNKNOWN;
    /**
     * @var string
     * @cvalue LOC_SCRIPT_TAG
     */
    #[\Since('8.2')]
    public const SCRIPT_TAG = UNKNOWN;
    /**
     * @var string
     * @cvalue LOC_REGION_TAG
     */
    #[\Since('8.2')]
    public const REGION_TAG = UNKNOWN;
    /**
     * @var string
     * @cvalue LOC_VARIANT_TAG
     */
    #[\Since('8.2')]
    public const VARIANT_TAG = UNKNOWN;
    /**
     * @var string
     * @cvalue LOC_GRANDFATHERED_LANG_TAG
     */
    #[\Since('8.2')]
    public const GRANDFATHERED_LANG_TAG = UNKNOWN;
    /**
     * @var string
     * @cvalue LOC_PRIVATE_TAG
     */
    #[\Since('8.2')]
    public const PRIVATE_TAG = UNKNOWN;
}