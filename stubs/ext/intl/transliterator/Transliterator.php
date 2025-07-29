<?php 

/** @generate-function-entries */
class Transliterator
{
    /**
     * @var int
     * @cvalue TRANSLITERATOR_FORWARD
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const FORWARD = UNKNOWN;
    /**
     * @var int
     * @cvalue TRANSLITERATOR_REVERSE
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const REVERSE = UNKNOWN;
    final private function __construct()
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_create
     * @return (Transliterator | null)
     */
    public static function create(string $id, int $direction = Transliterator::FORWARD)
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_create_from_rules
     * @return (Transliterator | null)
     */
    public static function createFromRules(string $rules, int $direction = Transliterator::FORWARD)
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_create_inverse
     * @return (Transliterator | null)
     */
    public function createInverse()
    {
    }
    /**
     * @return array|false
     * @alias transliterator_list_ids
     */
    public static function listIDs()
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_transliterate
     * @return (string | false)
     */
    public function transliterate(string $string, int $start = 0, int $end = -1)
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_get_error_code
     * @return (int | false)
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias transliterator_get_error_message
     * @return (string | false)
     */
    public function getErrorMessage()
    {
    }
    /** @cvalue TRANSLITERATOR_FORWARD */
    #[\Since('8.4')]
    public const int FORWARD = UNKNOWN;
    /** @cvalue TRANSLITERATOR_REVERSE */
    #[\Since('8.4')]
    public const int REVERSE = UNKNOWN;
}