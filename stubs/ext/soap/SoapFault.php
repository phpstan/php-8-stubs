<?php 

class SoapFault extends \Exception
{
    #[\Until('8.5')]
    public function __construct(array|string|null $code, string $string, ?string $actor = null, mixed $details = null, ?string $name = null, mixed $headerFault = null)
    {
    }
    #[\Since('8.5')]
    public function __construct(array|string|null $code, string $string, ?string $actor = null, mixed $details = null, ?string $name = null, mixed $headerFault = null, string $lang = "")
    {
    }
    public function __toString(): string
    {
    }
}