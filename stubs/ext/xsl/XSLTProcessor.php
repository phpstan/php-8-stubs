<?php 

/** @generate-function-entries */
class XSLTProcessor
{
    /**
     * @param (DOMDocument | Dom\Document | SimpleXMLElement) $stylesheet
     * @tentative-return-type
     * @return bool
     */
    public function importStylesheet(object $stylesheet)
    {
    }
    /**
     * @param (DOMDocument | Dom\Document | SimpleXMLElement) $document
     * @tentative-return-type
     * @return (DOMDocument | false)
     */
    public function transformToDoc(object $document, ?string $returnClass = null)
    {
    }
    /**
     * @param (DOMDocument | Dom\Document | SimpleXMLElement) $document
     * @tentative-return-type
     * @return int
     */
    public function transformToUri(object $document, string $uri)
    {
    }
    /**
     * @param (DOMDocument | Dom\Document | SimpleXMLElement) $document
     * @tentative-return-type
     * @return (string | false | null)
     */
    public function transformToXml(object $document)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function setParameter(string $namespace, array|string $name, ?string $value = null)
    {
    }
    /**
     * @tentative-return-type
     * @return (string | false)
     */
    public function getParameter(string $namespace, string $name)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function removeParameter(string $namespace, string $name)
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function hasExsltSupport()
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function registerPHPFunctions(array|string|null $functions = null)
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function registerPHPFunctionNS(string $namespaceURI, string $name, callable $callable): void
    {
    }
    #[\Since('8.5')]
    public function registerPHPFunctionNS(string $namespaceURI, string $name, callable $callable): void
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function setProfiling(?string $filename)
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function setSecurityPrefs(int $preferences)
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function getSecurityPrefs()
    {
    }
}