<?php 

/** @generate-class-entries */
class UConverter
{
    public function __construct(?string $destination_encoding = null, ?string $source_encoding = null)
    {
    }
    /** @tentative-return-type */
    public function convert(string $str, bool $reverse = false)
    {
    }
    /**
     * @param int $error
     * @tentative-return-type
     */
    public function fromUCallback(int $reason, array $source, int $codePoint, &$error)
    {
    }
    /**
     * @return array<int, string>|false|null
     * @tentative-return-type
     */
    public static function getAliases(string $name)
    {
    }
    /**
     * @return array<int, string>
     * @tentative-return-type
     */
    public static function getAvailable()
    {
    }
    /** @tentative-return-type */
    public function getDestinationEncoding()
    {
    }
    /** @tentative-return-type */
    public function getDestinationType()
    {
    }
    /** @tentative-return-type */
    public function getErrorCode()
    {
    }
    /** @tentative-return-type */
    public function getErrorMessage()
    {
    }
    /** @tentative-return-type */
    public function getSourceEncoding()
    {
    }
    /** @tentative-return-type */
    public function getSourceType()
    {
    }
    /** @tentative-return-type */
    public static function getStandards()
    {
    }
    /** @tentative-return-type */
    public function getSubstChars()
    {
    }
    /** @tentative-return-type */
    public static function reasonText(int $reason)
    {
    }
    /** @tentative-return-type */
    public function setDestinationEncoding(string $encoding)
    {
    }
    /** @tentative-return-type */
    public function setSourceEncoding(string $encoding)
    {
    }
    /** @tentative-return-type */
    public function setSubstChars(string $chars)
    {
    }
    /**
     * @param int $error
     * @tentative-return-type
     */
    public function toUCallback(int $reason, string $source, string $codeUnits, &$error)
    {
    }
    /** @tentative-return-type */
    public static function transcode(string $str, string $toEncoding, string $fromEncoding, ?array $options = null)
    {
    }
}