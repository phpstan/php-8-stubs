<?php 

/** @generate-class-entries */
class UConverter
{
    public function __construct(?string $destination_encoding = null, ?string $source_encoding = null)
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function convert(string $str, bool $reverse = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function convert(string $str, bool $reverse = false) : string|false
    {
    }
    /**
     * @param int $error
     * @return string|int|array|null
     */
    #[\Until('8.1')]
    public function fromUCallback(int $reason, array $source, int $codePoint, &$error)
    {
    }
    /**
     * @param int $error
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function fromUCallback(int $reason, array $source, int $codePoint, &$error) : string|int|array|null
    {
    }
    /** @return array|false|null */
    #[\Until('8.1')]
    public static function getAliases(string $name)
    {
    }
    /**
     * @return array<int, string>|false|null
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public static function getAliases(string $name) : array|false|null
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public static function getAvailable()
    {
    }
    /**
     * @return array<int, string>
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public static function getAvailable() : array
    {
    }
    /** @return string|false|null */
    #[\Until('8.1')]
    public function getDestinationEncoding()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDestinationEncoding() : string|false|null
    {
    }
    /** @return int|false|null */
    #[\Until('8.1')]
    public function getDestinationType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getDestinationType() : int|false|null
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getErrorCode() : int
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getErrorMessage() : ?string
    {
    }
    /** @return string|false|null */
    #[\Until('8.1')]
    public function getSourceEncoding()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSourceEncoding() : string|false|null
    {
    }
    /** @return int|false|null */
    #[\Until('8.1')]
    public function getSourceType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSourceType() : int|false|null
    {
    }
    /** @return array|null */
    #[\Until('8.1')]
    public static function getStandards()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getStandards() : ?array
    {
    }
    /** @return string|false|null */
    #[\Until('8.1')]
    public function getSubstChars()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSubstChars() : string|false|null
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public static function reasonText(int $reason)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function reasonText(int $reason) : string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setDestinationEncoding(string $encoding)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setDestinationEncoding(string $encoding) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setSourceEncoding(string $encoding)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setSourceEncoding(string $encoding) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setSubstChars(string $chars)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setSubstChars(string $chars) : bool
    {
    }
    /**
     * @param int $error
     * @return string|int|array|null
     */
    #[\Until('8.1')]
    public function toUCallback(int $reason, string $source, string $codeUnits, &$error)
    {
    }
    /**
     * @param int $error
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function toUCallback(int $reason, string $source, string $codeUnits, &$error) : string|int|array|null
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public static function transcode(string $str, string $toEncoding, string $fromEncoding, ?array $options = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function transcode(string $str, string $toEncoding, string $fromEncoding, ?array $options = null) : string|false
    {
    }
}