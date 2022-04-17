<?php 

/** @generate-class-entries */
class Transliterator
{
    private final function __construct()
    {
    }
    /**
     * @return Transliterator|null
     * @alias transliterator_create
     */
    #[\Until('8.1')]
    public static function create(string $id, int $direction = Transliterator::FORWARD)
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_create
     */
    #[\Since('8.1')]
    public static function create(string $id, int $direction = Transliterator::FORWARD) : ?Transliterator
    {
    }
    /**
     * @return Transliterator|null
     * @alias transliterator_create_from_rules
     */
    #[\Until('8.1')]
    public static function createFromRules(string $rules, int $direction = Transliterator::FORWARD)
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_create_from_rules
     */
    #[\Since('8.1')]
    public static function createFromRules(string $rules, int $direction = Transliterator::FORWARD) : ?Transliterator
    {
    }
    /**
     * @return Transliterator|null
     * @alias transliterator_create_inverse
     */
    #[\Until('8.1')]
    public function createInverse()
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_create_inverse
     */
    #[\Since('8.1')]
    public function createInverse() : ?Transliterator
    {
    }
    /**
     * @return array|false
     * @alias transliterator_list_ids
     */
    #[\Until('8.1')]
    public static function listIDs()
    {
    }
    /**
     * @return array<int, string>|false
     * @tentative-return-type
     * @alias transliterator_list_ids
     */
    #[\Since('8.1')]
    public static function listIDs() : array|false
    {
    }
    /**
     * @return string|false
     * @alias transliterator_transliterate
     */
    #[\Until('8.1')]
    public function transliterate(string $string, int $start = 0, int $end = -1)
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_transliterate
     */
    #[\Since('8.1')]
    public function transliterate(string $string, int $start = 0, int $end = -1) : string|false
    {
    }
    /**
     * @return int|false
     * @alias transliterator_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int|false
    {
    }
    /**
     * @return string|false
     * @alias transliterator_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string|false
    {
    }
}