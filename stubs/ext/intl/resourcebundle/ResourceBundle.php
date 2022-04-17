<?php 

/** @generate-class-entries */
class ResourceBundle implements \IteratorAggregate, \Countable
{
    public function __construct(?string $locale, ?string $bundle, bool $fallback = true)
    {
    }
    /**
     * @return ResourceBundle|null
     * @alias resourcebundle_create
     */
    #[\Until('8.1')]
    public static function create(?string $locale, ?string $bundle, bool $fallback = true)
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_create
     */
    #[\Since('8.1')]
    public static function create(?string $locale, ?string $bundle, bool $fallback = true) : ?ResourceBundle
    {
    }
    /**
     * @param string|int $index
     * @return mixed
     * @alias resourcebundle_get
     */
    #[\Until('8.1')]
    public function get($index, bool $fallback = true)
    {
    }
    /**
     * @param string|int $index
     * @tentative-return-type
     * @alias resourcebundle_get
     */
    #[\Since('8.1')]
    public function get($index, bool $fallback = true) : mixed
    {
    }
    /**
     * @return int
     * @alias resourcebundle_count
     */
    #[\Until('8.1')]
    public function count()
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_count
     */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    /**
     * @return array|false
     * @alias resourcebundle_locales
     */
    #[\Until('8.1')]
    public static function getLocales(string $bundle)
    {
    }
    /**
     * @return array<int, string>|false
     * @tentative-return-type
     * @alias resourcebundle_locales
     */
    #[\Since('8.1')]
    public static function getLocales(string $bundle) : array|false
    {
    }
    /**
     * @return int
     * @alias resourcebundle_get_error_code
     */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_get_error_code
     */
    #[\Since('8.1')]
    public function getErrorCode() : int
    {
    }
    /**
     * @return string
     * @alias resourcebundle_get_error_message
     */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /**
     * @tentative-return-type
     * @alias resourcebundle_get_error_message
     */
    #[\Since('8.1')]
    public function getErrorMessage() : string
    {
    }
    public function getIterator() : Iterator
    {
    }
}