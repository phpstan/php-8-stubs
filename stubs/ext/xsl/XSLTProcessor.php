<?php 

/** @generate-class-entries */
class XSLTProcessor
{
    /**
     * @param DOMDocument|SimpleXMLElement $stylesheet
     * @tentative-return-type
     */
    public function importStylesheet(object $stylesheet)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @tentative-return-type
     */
    public function transformToDoc(object $document, ?string $returnClass = null)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @tentative-return-type
     */
    public function transformToUri(object $document, string $uri)
    {
    }
    /**
     * @param DOMDocument|SimpleXMLElement $document
     * @tentative-return-type
     */
    public function transformToXml(object $document)
    {
    }
    /** @tentative-return-type */
    public function setParameter(string $namespace, array|string $name, ?string $value = null)
    {
    }
    /** @tentative-return-type */
    public function getParameter(string $namespace, string $name)
    {
    }
    /** @tentative-return-type */
    public function removeParameter(string $namespace, string $name)
    {
    }
    /** @tentative-return-type */
    public function hasExsltSupport()
    {
    }
    /** @tentative-return-type */
    public function registerPHPFunctions(array|string|null $functions = null)
    {
    }
    /** @return bool */
    public function setProfiling(?string $filename)
    {
    }
    // TODO make the return type void
    /** @tentative-return-type */
    public function setSecurityPrefs(int $preferences)
    {
    }
    /** @tentative-return-type */
    public function getSecurityPrefs()
    {
    }
}