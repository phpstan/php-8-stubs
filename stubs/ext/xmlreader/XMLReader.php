<?php 

/** @generate-class-entries */
class XMLReader
{
    /** @return bool */
    public function close()
    {
    }
    // TODO make the return type void
    /** @tentative-return-type */
    public function getAttribute(string $name)
    {
    }
    /** @tentative-return-type */
    public function getAttributeNo(int $index)
    {
    }
    /** @tentative-return-type */
    public function getAttributeNs(string $name, string $namespace)
    {
    }
    /** @tentative-return-type */
    public function getParserProperty(int $property)
    {
    }
    /** @tentative-return-type */
    public function isValid()
    {
    }
    /** @tentative-return-type */
    public function lookupNamespace(string $prefix)
    {
    }
    /** @tentative-return-type */
    public function moveToAttribute(string $name)
    {
    }
    /** @tentative-return-type */
    public function moveToAttributeNo(int $index)
    {
    }
    /** @tentative-return-type */
    public function moveToAttributeNs(string $name, string $namespace)
    {
    }
    /** @tentative-return-type */
    public function moveToElement()
    {
    }
    /** @tentative-return-type */
    public function moveToFirstAttribute()
    {
    }
    /** @tentative-return-type */
    public function moveToNextAttribute()
    {
    }
    /** @tentative-return-type */
    public function read()
    {
    }
    /** @tentative-return-type */
    public function next(?string $name = null)
    {
    }
    /** @return bool|XMLReader */
    public static function open(string $uri, ?string $encoding = null, int $flags = 0)
    {
    }
    // TODO Return type shouldn't be dependent on the call scope
    /** @tentative-return-type */
    public function readInnerXml()
    {
    }
    /** @tentative-return-type */
    public function readOuterXml()
    {
    }
    /** @tentative-return-type */
    public function readString()
    {
    }
    /** @tentative-return-type */
    public function setSchema(?string $filename)
    {
    }
    /** @tentative-return-type */
    public function setParserProperty(int $property, bool $value)
    {
    }
    /** @tentative-return-type */
    public function setRelaxNGSchema(?string $filename)
    {
    }
    /** @tentative-return-type */
    public function setRelaxNGSchemaSource(?string $source)
    {
    }
    /** @return bool|XMLReader */
    public static function XML(string $source, ?string $encoding = null, int $flags = 0)
    {
    }
    // TODO Return type shouldn't be dependent on the call scope
    /** @tentative-return-type */
    public function expand(?DOMNode $baseNode = null)
    {
    }
}