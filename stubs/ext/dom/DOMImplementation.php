<?php 

class DOMImplementation
{
    /** @return void */
    #[\Until('8.1')]
    public function getFeature(string $feature, string $version)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFeature(string $feature, string $version) : never
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasFeature(string $feature, string $version)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasFeature(string $feature, string $version) : bool
    {
    }
    /** @return DOMDocumentType|false */
    public function createDocumentType(string $qualifiedName, string $publicId = "", string $systemId = "")
    {
    }
    /** @return DOMDocument|false */
    public function createDocument(?string $namespace = null, string $qualifiedName = "", ?DOMDocumentType $doctype = null)
    {
    }
}