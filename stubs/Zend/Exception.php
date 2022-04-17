<?php 

class Exception implements \Throwable
{
    #[\Until('8.1')]
    private final function __clone() : void
    {
    }
    #[\Since('8.1')]
    private function __clone() : void
    {
    }
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function __wakeup()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __wakeup() : void
    {
    }
    public final function getMessage() : string
    {
    }
    public final function getCode()
    {
    }
    public final function getFile() : string
    {
    }
    public final function getLine() : int
    {
    }
    public final function getTrace() : array
    {
    }
    public final function getPrevious() : ?Throwable
    {
    }
    public final function getTraceAsString() : string
    {
    }
    public function __toString() : string
    {
    }
}