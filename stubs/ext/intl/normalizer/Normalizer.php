<?php 

/** @generate-class-entries */
class Normalizer
{
    /**
     * @return string|false
     * @alias normalizer_normalize
     */
    #[\Until('8.1')]
    public static function normalize(string $string, int $form = Normalizer::FORM_C)
    {
    }
    /**
     * @tentative-return-type
     * @alias normalizer_normalize
     */
    #[\Since('8.1')]
    public static function normalize(string $string, int $form = Normalizer::FORM_C) : string|false
    {
    }
    /**
     * @return bool
     * @alias normalizer_is_normalized
     */
    #[\Until('8.1')]
    public static function isNormalized(string $string, int $form = Normalizer::FORM_C)
    {
    }
    /**
     * @tentative-return-type
     * @alias normalizer_is_normalized
     */
    #[\Since('8.1')]
    public static function isNormalized(string $string, int $form = Normalizer::FORM_C) : bool
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 56
    /**
     * @return string|null
     * @alias normalizer_get_raw_decomposition
     */
    #[\Until('8.1')]
    public static function getRawDecomposition(string $string, int $form = Normalizer::FORM_C)
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 56
    /**
     * @tentative-return-type
     * @alias normalizer_get_raw_decomposition
     */
    #[\Since('8.1')]
    public static function getRawDecomposition(string $string, int $form = Normalizer::FORM_C) : ?string
    {
    }
}