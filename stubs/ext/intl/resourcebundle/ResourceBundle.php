<?php 

/** @generate-class-entries */
class ResourceBundle implements \IteratorAggregate, \Countable
{
    public function __construct(?string $locale, ?string $bundle, bool $fallback = true)
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_create
     */
    public static function create(?string $locale, ?string $bundle, bool $fallback = true)
    {
    }
    /**
     * @param string|int $index
     * @tentative-return-type
     * @alias resourcebundle_get
     */
    public function get($index, bool $fallback = true)
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_count
     */
    public function count()
    {
    }
    /**
     * @return array<int, string>|false
     * @tentative-return-type
     * @alias resourcebundle_locales
     */
    public static function getLocales(string $bundle)
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_get_error_code
     */
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_get_error_message
     */
    public function getErrorMessage()
    {
    }
    public function getIterator() : Iterator
    {
    }
}