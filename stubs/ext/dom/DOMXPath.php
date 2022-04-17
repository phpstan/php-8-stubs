<?php 

#ifdef LIBXML_XPATH_ENABLED
/** @not-serializable */
class DOMXPath
{
    public function __construct(DOMDocument $document, bool $registerNodeNS = true)
    {
    }
    /** @tentative-return-type */
    public function evaluate(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true)
    {
    }
    /** @tentative-return-type */
    public function query(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true)
    {
    }
    /** @tentative-return-type */
    public function registerNamespace(string $prefix, string $namespace)
    {
    }
    /** @tentative-return-type */
    public function registerPhpFunctions(string|array|null $restrict = null)
    {
    }
}