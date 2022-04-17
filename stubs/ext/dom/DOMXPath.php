<?php 

#ifdef LIBXML_XPATH_ENABLED
/** @not-serializable */
class DOMXPath
{
    public function __construct(DOMDocument $document, bool $registerNodeNS = true)
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function evaluate(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function evaluate(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true) : mixed
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function query(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function query(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true) : mixed
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function registerNamespace(string $prefix, string $namespace)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerNamespace(string $prefix, string $namespace) : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function registerPhpFunctions(string|array|null $restrict = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerPhpFunctions(string|array|null $restrict = null) : void
    {
    }
}