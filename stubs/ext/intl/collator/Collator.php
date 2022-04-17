<?php 

/** @generate-class-entries */
class Collator
{
    public function __construct(string $locale)
    {
    }
    /**
     * @return Collator|null
     * @alias collator_create
     */
    #[\Until('8.1')]
    public static function create(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_create
     */
    #[\Since('8.1')]
    public static function create(string $locale) : ?Collator
    {
    }
    /**
     * @return int|false
     * @alias collator_compare
     */
    #[\Until('8.1')]
    public function compare(string $string1, string $string2)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_compare
     */
    #[\Since('8.1')]
    public function compare(string $string1, string $string2) : int|false
    {
    }
    /**
     * @return bool
     * @alias collator_sort
     */
    #[\Until('8.1')]
    public function sort(array &$array, int $flags = Collator::SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_sort
     */
    #[\Since('8.1')]
    public function sort(array &$array, int $flags = Collator::SORT_REGULAR) : bool
    {
    }
    /**
     * @return bool
     * @alias collator_sort_with_sort_keys
     */
    #[\Until('8.1')]
    public function sortWithSortKeys(array &$array)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_sort_with_sort_keys
     */
    #[\Since('8.1')]
    public function sortWithSortKeys(array &$array) : bool
    {
    }
    /**
     * @return bool
     * @alias collator_asort
     */
    #[\Until('8.1')]
    public function asort(array &$array, int $flags = Collator::SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_asort
     */
    #[\Since('8.1')]
    public function asort(array &$array, int $flags = Collator::SORT_REGULAR) : bool
    {
    }
    /**
     * @return int|false
     * @alias collator_get_attribute
     */
    #[\Until('8.1')]
    public function getAttribute(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_attribute
     */
    #[\Since('8.1')]
    public function getAttribute(int $attribute) : int|false
    {
    }
    /**
     * @return bool
     * @alias collator_set_attribute
     */
    #[\Until('8.1')]
    public function setAttribute(int $attribute, int $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_set_attribute
     */
    #[\Since('8.1')]
    public function setAttribute(int $attribute, int $value) : bool
    {
    }
    /**
     * @return int
     * @alias collator_get_strength
     */
    #[\Until('8.1')]
    public function getStrength()
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_strength
     */
    #[\Since('8.1')]
    public function getStrength() : int
    {
    }
    /**
     * @return bool
     * @alias collator_set_strength
     */
    public function setStrength(int $strength)
    {
    }
    /**
     * @return string|false
     * @alias collator_get_locale
     */
    #[\Until('8.1')]
    public function getLocale(int $type)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias collator_get_locale
     */
    #[\Since('8.1')]
    public function getLocale(int $type) : string|false
    {
    }
    /**
     * @return int|false
     * @alias collator_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int|false
    {
    }
    /**
     * @return string|false
     * @alias collator_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string|false
    {
    }
    /**
     * @return string|false
     * @alias collator_get_sort_key
     */
    #[\Until('8.1')]
    public function getSortKey(string $string)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_sort_key
     */
    #[\Since('8.1')]
    public function getSortKey(string $string) : string|false
    {
    }
}