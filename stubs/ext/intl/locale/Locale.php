<?php 

/** @generate-class-entries */
class Locale
{
    /**
     * @return string
     * @alias locale_get_default
     */
    #[\Until('8.1')]
    public static function getDefault()
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_default
     */
    #[\Since('8.1')]
    public static function getDefault() : string
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
     * @return string|null
     * @alias locale_get_primary_language
     */
    #[\Until('8.1')]
    public static function getPrimaryLanguage(string $locale)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias locale_get_primary_language
     */
    #[\Since('8.1')]
    public static function getPrimaryLanguage(string $locale) : ?string
    {
    }
    /**
     * @return string|null
     * @alias locale_get_script
     */
    #[\Until('8.1')]
    public static function getScript(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_script
     */
    #[\Since('8.1')]
    public static function getScript(string $locale) : ?string
    {
    }
    /**
     * @return string|null
     * @alias locale_get_region
     */
    #[\Until('8.1')]
    public static function getRegion(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_region
     */
    #[\Since('8.1')]
    public static function getRegion(string $locale) : ?string
    {
    }
    /**
     * @return array|false|null
     * @alias locale_get_keywords
     */
    #[\Until('8.1')]
    public static function getKeywords(string $locale)
    {
    }
    /**
     * @return array<string, string>|false|null
     * @tentative-return-type
     * @alias locale_get_keywords
     */
    #[\Since('8.1')]
    public static function getKeywords(string $locale) : array|false|null
    {
    }
    /**
     * @return string|false
     * @alias locale_get_display_script
     */
    #[\Until('8.1')]
    public static function getDisplayScript(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_script
     */
    #[\Since('8.1')]
    public static function getDisplayScript(string $locale, ?string $displayLocale = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias locale_get_display_region
     */
    #[\Until('8.1')]
    public static function getDisplayRegion(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_region
     */
    #[\Since('8.1')]
    public static function getDisplayRegion(string $locale, ?string $displayLocale = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias locale_get_display_name
     */
    #[\Until('8.1')]
    public static function getDisplayName(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_name
     */
    #[\Since('8.1')]
    public static function getDisplayName(string $locale, ?string $displayLocale = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias locale_get_display_language
     */
    #[\Until('8.1')]
    public static function getDisplayLanguage(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_language
     */
    #[\Since('8.1')]
    public static function getDisplayLanguage(string $locale, ?string $displayLocale = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias locale_get_display_variant
     */
    #[\Until('8.1')]
    public static function getDisplayVariant(string $locale, ?string $displayLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_display_variant
     */
    #[\Since('8.1')]
    public static function getDisplayVariant(string $locale, ?string $displayLocale = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias locale_compose
     */
    #[\Until('8.1')]
    public static function composeLocale(array $subtags)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_compose
     */
    #[\Since('8.1')]
    public static function composeLocale(array $subtags) : string|false
    {
    }
    /**
     * @return array|null
     * @alias locale_parse
     */
    #[\Until('8.1')]
    public static function parseLocale(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_parse
     */
    #[\Since('8.1')]
    public static function parseLocale(string $locale) : ?array
    {
    }
    /**
     * @return array|null
     * @alias locale_get_all_variants
     */
    #[\Until('8.1')]
    public static function getAllVariants(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_get_all_variants
     */
    #[\Since('8.1')]
    public static function getAllVariants(string $locale) : ?array
    {
    }
    /**
     * @return bool|null
     * @alias locale_filter_matches
     */
    #[\Until('8.1')]
    public static function filterMatches(string $languageTag, string $locale, bool $canonicalize = false)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_filter_matches
     */
    #[\Since('8.1')]
    public static function filterMatches(string $languageTag, string $locale, bool $canonicalize = false) : ?bool
    {
    }
    /**
     * @return string|null
     * @alias locale_lookup
     */
    #[\Until('8.1')]
    public static function lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_lookup
     */
    #[\Since('8.1')]
    public static function lookup(array $languageTag, string $locale, bool $canonicalize = false, ?string $defaultLocale = null) : ?string
    {
    }
    /**
     * @return string|null
     * @alias locale_canonicalize
     */
    #[\Until('8.1')]
    public static function canonicalize(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_canonicalize
     */
    #[\Since('8.1')]
    public static function canonicalize(string $locale) : ?string
    {
    }
    /**
     * @return string|false
     * @alias locale_accept_from_http
     */
    #[\Until('8.1')]
    public static function acceptFromHttp(string $header)
    {
    }
    /**
     * @tentative-return-type
     * @alias locale_accept_from_http
     */
    #[\Since('8.1')]
    public static function acceptFromHttp(string $header) : string|false
    {
    }
}