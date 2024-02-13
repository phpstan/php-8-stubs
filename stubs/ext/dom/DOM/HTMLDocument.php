<?php 

namespace DOM;

/** @strict-properties */
#[\Since('8.2')]
final class HTMLDocument extends \DOM\Document
{
    private function __construct()
    {
    }
    public static function createEmpty(string $encoding = "UTF-8"): HTMLDocument
    {
    }
    public static function createFromFile(string $path, int $options = 0, ?string $overrideEncoding = null): HTMLDocument
    {
    }
    public static function createFromString(string $source, int $options = 0, ?string $overrideEncoding = null): HTMLDocument
    {
    }
    /** @implementation-alias DOMDocument::saveXML */
    public function saveXML(?Node $node = null, int $options = 0): string|false
    {
    }
    /** @implementation-alias DOMDocument::save */
    public function saveXMLFile(string $filename, int $options = 0): int|false
    {
    }
    public function saveHTML(?Node $node = null): string|false
    {
    }
    public function saveHTMLFile(string $filename): int|false
    {
    }
}