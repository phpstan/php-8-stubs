<?php 

/** @generate-function-entries */
class Collator
{
    public function __construct(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_create
     * @return (Collator | null)
     */
    public static function create(string $locale)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_compare
     * @return (int | false)
     */
    public function compare(string $string1, string $string2)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_sort
     * @return bool
     */
    public function sort(array &$array, int $flags = Collator::SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_sort_with_sort_keys
     * @return bool
     */
    public function sortWithSortKeys(array &$array)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_asort
     * @return bool
     */
    public function asort(array &$array, int $flags = Collator::SORT_REGULAR)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_attribute
     * @return (int | false)
     */
    public function getAttribute(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_set_attribute
     * @return bool
     */
    public function setAttribute(int $attribute, int $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_strength
     * @return int
     */
    public function getStrength()
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
     * @tentative-return-type
     * @alias collator_get_locale
     * @return (string | false)
     */
    public function getLocale(int $type)
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_error_code
     * @return (int | false)
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_error_message
     * @return (string | false)
     */
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias collator_get_sort_key
     * @return (string | false)
     */
    public function getSortKey(string $string)
    {
    }
    /**
     * @var int
     * @cvalue UCOL_DEFAULT
     */
    #[\Since('8.2')]
    const DEFAULT_VALUE = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_PRIMARY
     */
    #[\Since('8.2')]
    const PRIMARY = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_SECONDARY
     */
    #[\Since('8.2')]
    const SECONDARY = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_TERTIARY
     */
    #[\Since('8.2')]
    const TERTIARY = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_DEFAULT_STRENGTH
     */
    #[\Since('8.2')]
    const DEFAULT_STRENGTH = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_QUATERNARY
     */
    #[\Since('8.2')]
    const QUATERNARY = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_IDENTICAL
     */
    #[\Since('8.2')]
    const IDENTICAL = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_OFF
     */
    #[\Since('8.2')]
    const OFF = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_ON
     */
    #[\Since('8.2')]
    const ON = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_SHIFTED
     */
    #[\Since('8.2')]
    const SHIFTED = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_NON_IGNORABLE
     */
    #[\Since('8.2')]
    const NON_IGNORABLE = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_LOWER_FIRST
     */
    #[\Since('8.2')]
    const LOWER_FIRST = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_UPPER_FIRST
     */
    #[\Since('8.2')]
    const UPPER_FIRST = UNKNOWN;
    /* UColAttribute constants */
    /**
     * @var int
     * @cvalue UCOL_FRENCH_COLLATION
     */
    #[\Since('8.2')]
    const FRENCH_COLLATION = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_ALTERNATE_HANDLING
     */
    #[\Since('8.2')]
    const ALTERNATE_HANDLING = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_CASE_FIRST
     */
    #[\Since('8.2')]
    const CASE_FIRST = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_CASE_LEVEL
     */
    #[\Since('8.2')]
    const CASE_LEVEL = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_NORMALIZATION_MODE
     */
    #[\Since('8.2')]
    const NORMALIZATION_MODE = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_STRENGTH
     */
    #[\Since('8.2')]
    const STRENGTH = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_HIRAGANA_QUATERNARY_MODE
     */
    #[\Since('8.2')]
    const HIRAGANA_QUATERNARY_MODE = UNKNOWN;
    /**
     * @var int
     * @cvalue UCOL_NUMERIC_COLLATION
     */
    #[\Since('8.2')]
    const NUMERIC_COLLATION = UNKNOWN;
    /* sort flags */
    /**
     * @var int
     * @cvalue COLLATOR_SORT_REGULAR
     */
    #[\Since('8.2')]
    const SORT_REGULAR = UNKNOWN;
    /**
     * @var int
     * @cvalue COLLATOR_SORT_STRING
     */
    #[\Since('8.2')]
    const SORT_STRING = UNKNOWN;
    /**
     * @var int
     * @cvalue COLLATOR_SORT_NUMERIC
     */
    #[\Since('8.2')]
    const SORT_NUMERIC = UNKNOWN;
}