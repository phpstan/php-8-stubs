<?php 

class SoapFault extends \Exception
{
    public function __construct(array|string|null $faultcode, string $faultstring, ?string $faultactor = null, mixed $detail = null, ?string $faultname = null, mixed $headerfault = null)
    {
    }
    public function __toString() : string
    {
    }
}