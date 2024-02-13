<?php 

namespace DOM;

/** @strict-properties */
#[\Since('8.2')]
final class XMLDocument extends \DOM\Document
{
    /** @implementation-alias DOM\HTMLDocument::__construct */
    private function __construct()
    {
    }
    public static function createEmpty(string $version = "1.0", string $encoding = "UTF-8"): XMLDocument
    {
    }
    public static function createFromFile(string $path, int $options = 0, ?string $overrideEncoding = null): XMLDocument
    {
    }
    public static function createFromString(string $source, int $options = 0, ?string $overrideEncoding = null): XMLDocument
    {
    }
    /** @readonly */
    public ?string $xmlEncoding;
    public bool $standalone;
    public bool $xmlStandalone;
    public ?string $version;
    public ?string $xmlVersion;
    public bool $formatOutput;
    public bool $validateOnParse;
    public bool $resolveExternals;
    public bool $preserveWhiteSpace;
    public bool $recover;
    public bool $substituteEntities;
    /**
     * @implementation-alias DOMDocument::createEntityReference
     * @return EntityReference|false
     */
    public function createEntityReference(string $name)
    {
    }
    /**
     * @implementation-alias DOMDocument::validate
     */
    public function validate(): bool
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias DOMDocument::xinclude
     */
    public function xinclude(int $options = 0): int|false
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias DOMDocument::saveXML
     */
    public function saveXML(?Node $node = null, int $options = 0): string|false
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias DOMDocument::save
     */
    public function saveXMLFile(string $filename, int $options = 0): int|false
    {
    }
}