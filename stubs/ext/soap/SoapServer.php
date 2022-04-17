<?php 

class SoapServer
{
    public function __construct(?string $wsdl, array $options = [])
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = "") : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function addSoapHeader(SoapHeader $header)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addSoapHeader(SoapHeader $header) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setPersistence(int $mode)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setPersistence(int $mode) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setClass(string $class, mixed ...$args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setClass(string $class, mixed ...$args) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setObject(object $object)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setObject(object $object) : void
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getFunctions()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFunctions() : array
    {
    }
    /**
     * @param array|string|int $functions
     * @return void
     */
    #[\Until('8.1')]
    public function addFunction($functions)
    {
    }
    /**
     * @param array|string|int $functions
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function addFunction($functions) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function handle(?string $request = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function handle(?string $request = null) : void
    {
    }
}