<?php 

class SoapServer
{
    public function __construct(?string $wsdl, array $options = [])
    {
    }
    /** @tentative-return-type */
    public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = "")
    {
    }
    /** @tentative-return-type */
    public function addSoapHeader(SoapHeader $header)
    {
    }
    /** @tentative-return-type */
    public function setPersistence(int $mode)
    {
    }
    /** @tentative-return-type */
    public function setClass(string $class, mixed ...$args)
    {
    }
    /** @tentative-return-type */
    public function setObject(object $object)
    {
    }
    /** @tentative-return-type */
    public function getFunctions()
    {
    }
    /**
     * @param array|string|int $functions
     * @tentative-return-type
     */
    public function addFunction($functions)
    {
    }
    /** @tentative-return-type */
    public function handle(?string $request = null)
    {
    }
}