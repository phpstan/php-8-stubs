<?php 

class SoapClient
{
    public function __construct(?string $wsdl, array $options = [])
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function __call(string $name, array $args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __call(string $name, array $args) : mixed
    {
    }
    /**
     * @param SoapHeader|array|null $inputHeaders
     * @param array $outputHeaders
     * @return mixed
     */
    #[\Until('8.1')]
    public function __soapCall(string $name, array $args, ?array $options = null, $inputHeaders = null, &$outputHeaders = null)
    {
    }
    /**
     * @param SoapHeader|array|null $inputHeaders
     * @param array $outputHeaders
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function __soapCall(string $name, array $args, ?array $options = null, $inputHeaders = null, &$outputHeaders = null) : mixed
    {
    }
    /** @return array|null */
    #[\Until('8.1')]
    public function __getFunctions()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getFunctions() : ?array
    {
    }
    /** @return array|null */
    #[\Until('8.1')]
    public function __getTypes()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getTypes() : ?array
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function __getLastRequest()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getLastRequest() : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function __getLastResponse()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getLastResponse() : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function __getLastRequestHeaders()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getLastRequestHeaders() : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function __getLastResponseHeaders()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getLastResponseHeaders() : ?string
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __doRequest(string $request, string $location, string $action, int $version, bool $oneWay = false) : ?string
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function __setCookie(string $name, ?string $value = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __setCookie(string $name, ?string $value = null) : void
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function __getCookies()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __getCookies() : array
    {
    }
    /**
     * @param SoapHeader|array|null $headers
     * @return bool
     */
    #[\Until('8.1')]
    public function __setSoapHeaders($headers = null)
    {
    }
    /**
     * @param SoapHeader|array|null $headers
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function __setSoapHeaders($headers = null) : bool
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function __setLocation(?string $location = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __setLocation(?string $location = null) : ?string
    {
    }
}