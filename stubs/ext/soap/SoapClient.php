<?php 

class SoapClient
{
    public function __construct(?string $wsdl, array $options = [])
    {
    }
    /** @return mixed */
    public function __call(string $function_name, array $arguments)
    {
    }
    /**
     * @param SoapHeader|array|null $input_headers
     * @param array $output_headers
     * @return mixed
     */
    public function __soapCall(string $function_name, array $arguments, ?array $options = null, $input_headers = null, &$output_headers = null)
    {
    }
    /** @return array|null */
    public function __getFunctions()
    {
    }
    /** @return array|null */
    public function __getTypes()
    {
    }
    /** @return string|null */
    public function __getLastRequest()
    {
    }
    /** @return string|null */
    public function __getLastResponse()
    {
    }
    /** @return string|null */
    public function __getLastRequestHeaders()
    {
    }
    /** @return string|null */
    public function __getLastResponseHeaders()
    {
    }
    /** @return string|null */
    public function __doRequest(string $request, string $location, string $action, int $version, int $one_way = 0)
    {
    }
    /** @return void */
    public function __setCookie(string $name, ?string $value = null)
    {
    }
    /** @return array */
    public function __getCookies()
    {
    }
    /**
     * @param SoapHeader|array|null $soapheaders
     * @return bool
     */
    public function __setSoapHeaders($soapheaders = null)
    {
    }
    /** @return string|null */
    public function __setLocation(string $new_location = "")
    {
    }
}