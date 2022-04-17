<?php 

/** @generate-class-entries */
class XSLTProcessor
{
    /**
     * @param DOMDocument|SimpleXMLElement $stylesheet
     * @return bool
     */
    #[\Until('8.1')]
    public function importStylesheet(object $stylesheet)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $stylesheet
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function importStylesheet(object $stylesheet) : bool
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @return DOMDocument|false
     */
    #[\Until('8.1')]
    public function transformToDoc(object $document, ?string $returnClass = null)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function transformToDoc(object $document, ?string $returnClass = null) : DOMDocument|false
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @return int
     */
    #[\Until('8.1')]
    public function transformToUri(object $document, string $uri)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function transformToUri(object $document, string $uri) : int
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @return string|false|null
     */
    #[\Until('8.1')]
    public function transformToXml(object $document)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function transformToXml(object $document) : string|null|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setParameter(string $namespace, array|string $name, ?string $value = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setParameter(string $namespace, array|string $name, ?string $value = null) : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getParameter(string $namespace, string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getParameter(string $namespace, string $name) : string|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function removeParameter(string $namespace, string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function removeParameter(string $namespace, string $name) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasExsltSupport()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasExsltSupport() : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function registerPHPFunctions(array|string|null $functions = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerPHPFunctions(array|string|null $functions = null) : void
    {
    }
    /** @return bool */
    public function setProfiling(?string $filename)
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function setSecurityPrefs(int $preferences)
    {
    }
    // TODO make the return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setSecurityPrefs(int $preferences) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getSecurityPrefs()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSecurityPrefs() : int
    {
    }
}