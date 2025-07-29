<?php 

class SoapServer
{
    public function __construct(?string $wsdl, array $options = [])
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    #[\Until('8.5')]
    public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.5')]
    public function fault(string $code, string $string, string $actor = "", mixed $details = null, string $name = "", string $lang = "")
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function addSoapHeader(SoapHeader $header)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setPersistence(int $mode)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setClass(string $class, mixed ...$args)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function setObject(object $object)
    {
    }
    /**
     * @tentative-return-type
     * @return array
     */
    public function getFunctions()
    {
    }
    /**
     * @param (array | string | int) $functions
     * @tentative-return-type
     * @return void
     */
    public function addFunction($functions)
    {
    }
    /**
     * @tentative-return-type
     * @return void
     */
    public function handle(?string $request = null)
    {
    }
    #[\Since('8.4')]
    public function __getLastResponse(): ?string
    {
    }
}