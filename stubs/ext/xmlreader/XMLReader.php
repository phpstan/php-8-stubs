<?php 

/** @generate-class-entries */
class XMLReader
{
    /** @return bool */
    public function close()
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getAttribute(string $name)
    {
    }
    // TODO make the return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttribute(string $name) : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getAttributeNo(int $index)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttributeNo(int $index) : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getAttributeNs(string $name, string $namespace)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttributeNs(string $name, string $namespace) : ?string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function getParserProperty(int $property)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getParserProperty(int $property) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isValid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isValid() : bool
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function lookupNamespace(string $prefix)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lookupNamespace(string $prefix) : ?string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function moveToAttribute(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function moveToAttribute(string $name) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function moveToAttributeNo(int $index)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function moveToAttributeNo(int $index) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function moveToAttributeNs(string $name, string $namespace)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function moveToAttributeNs(string $name, string $namespace) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function moveToElement()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function moveToElement() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function moveToFirstAttribute()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function moveToFirstAttribute() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function moveToNextAttribute()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function moveToNextAttribute() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function read()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function read() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function next(?string $name = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next(?string $name = null) : bool
    {
    }
    /** @return bool|XMLReader */
    public static function open(string $uri, ?string $encoding = null, int $flags = 0)
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function readInnerXml()
    {
    }
    // TODO Return type shouldn't be dependent on the call scope
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function readInnerXml() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function readOuterXml()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function readOuterXml() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function readString()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function readString() : string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setSchema(?string $filename)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setSchema(?string $filename) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setParserProperty(int $property, bool $value)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setParserProperty(int $property, bool $value) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setRelaxNGSchema(?string $filename)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setRelaxNGSchema(?string $filename) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setRelaxNGSchemaSource(?string $source)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setRelaxNGSchemaSource(?string $source) : bool
    {
    }
    /** @return bool|XMLReader */
    public static function XML(string $source, ?string $encoding = null, int $flags = 0)
    {
    }
    /** @return DOMNode|false */
    #[\Until('8.1')]
    public function expand(?DOMNode $baseNode = null)
    {
    }
    // TODO Return type shouldn't be dependent on the call scope
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function expand(?DOMNode $baseNode = null) : DOMNode|false
    {
    }
}